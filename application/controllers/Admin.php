<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 10/31/2019
 * Time: 10:44 AM
 */

class Admin extends MY_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('Queries');

    }

    public function index(){
        $this->load->view('dashboard');
    }


    public function dashboard()
    {
        $this->load->view('dashboard.php');
    }

    public function addCollege(){

        $customer=new Queries();
        $data['data']=$customer->getAllCollege();
        $this->load->view('addCollege', $data);

//       $this->load->view('addCollege.php');
    }

    public function createCollege(){

        $this->form_validation->set_rules('collegename', 'CollegeName', 'required');
        $this->form_validation->set_rules('branch', 'Branch', 'required');

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run()) {

            $admin = new Queries();
            $admin->makeCollege();
            //echo '<script>alert("Succesfull Add");</script>';
            return redirect("admin/addCollege");

        } else {
            $this->addCollege();
        }



    }

    public function addStudent(){
        echo "student";
    }

    public function addCoadmin(){
        $this->load->model('queries');
        $roles = $this->queries->getRoles();
        $this->load->view('addCoadmin', ['roles' => $roles]);
    }

    public function createCoadmin(){
        $this->form_validation->set_rules('username','UserName', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confpwd', 'Password Again', 'required|matches[password]');

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


        if ($this->form_validation->run()) {
/*
            $admin = new Queries();
            $admin->insert_admindata();
            echo '<script>alert("Succesfull Add");</script>';
            return redirect("welcome/adminRegister");
*/
echo "ok";

        } else {
            $this->addCoadmin();
            //echo validation_errors();
        }
    }


}