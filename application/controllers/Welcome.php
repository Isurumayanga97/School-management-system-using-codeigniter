<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Queries');
    }


    public function index()
    {
        $this->load->view('home');
        /*
                $this->load->model('queries');
                $chkAdminExist = $this->queries->chkAdminExist();
                $this->load->view('home', ['chkAdminExist' => $chkAdminExist]);
        */
    }

    public function adminRegister()
    {
        $this->load->model('queries');
        $roles = $this->queries->getRoles();
        $this->load->view('register', ['roles' => $roles]);
    }

    public function adminSignup()
    {
        $this->form_validation->set_rules('username','UserName', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confpwd', 'Password Again', 'required|matches[password]');

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        /*
                if ($this->form_validation->run()) {
                    $data = $this->input->post();
                    $data['password'] = sha1($this->input->post('password'));
                    $data['confpwd'] = sha1($this->input->post('confpwd'));

                    if ($this->queries->registerAdmin($data)) {
                        $this->session->set_flashdata('message', 'Admin registerd');
                        return redirect("welcome/adminRegister");
                    } else {
                        $this->session->set_flashdata('message', 'Admin register failed');
                        return redirect("welcome/adminRegister");
                    }


                } else {
                    $this->adminRegister();
                }
        */

        if ($this->form_validation->run()) {

            $admin = new Queries();
            $admin->insert_admindata();
            echo '<script>alert("Succesfull Add");</script>';
            return redirect("welcome/adminRegister");

        } else {
            $this->adminRegister();
        }


    }

    public function login()
    {
            $this->load->view('login');

    }

    public function signin()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('queries');
            $userExit = $this->queries->adminExit($email, $password);

            if ($userExit) {
                $sessionData = [
                    'user_id' => $userExit->user_id,
                    'username' => $userExit->username,
                    'email' => $userExit->email,
                    'role_id' => $userExit->role_id,
                ];
                $this->session->set_userdata($sessionData);
                return redirect("admin/dashboard");


            }else{
                $this->session->set_flashdata('message','Email or password incorect');
                return redirect("welcome/login");
            }


        } else {
            $this->login();
        }

    }


    public function logout(){
        $this->session->unset_userdata("user_id");
        return redirect("welcome/login");
    }

}
