<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 10/30/2019
 * Time: 12:38 PM
 */

class Queries extends CI_Model
{


    public function getRoles()
    {
        $roles = $this->db->get('tbl_roles');
        if ($roles->num_rows() > 0) {
            return $roles->result();
        }
    }


    public function insert_admindata()
    {

        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'role_id' => $this->input->post('role_id'),
            'password' => $this->input->post('password'),
            'confpwd' => $this->input->post('confpwd'),
        );
        return $this->db->insert('tbl_users', $data);

    }

//    public function chkAdminExist()
//    {
//        $chkAdmin = $this->db->where(['role_id' => '1'])->get('tbl_users');
//        if ($chkAdmin->num_rows() > 0) {
//            return $chkAdmin->num_rows();
//        }
//    }

    public function adminExit($email, $password)
    {
        $chkAdmin = $this->db->where(['email' => $email, 'password' => $password])->get('tbl_users');
        if ($chkAdmin->num_rows() > 0) {
            return $chkAdmin->num_rows();
        }
    }

    public function makeCollege()
    {
        $data = array(
            'collegename' => $this->input->post('collegename'),
            'branch' => $this->input->post('branch'),
        );
        return $this->db->insert('tbl_college', $data);
    }

    public function getAllCollege(){

        /* if (!empty($this->input->get("search"))){
            $this->db->like('name',$this->input->get("search"));
            $this->db->or_like('address',$this->input->get("search"));
        }*/

        $query=$this->db->get("tbl_college");
        return $query->result();
    }




}