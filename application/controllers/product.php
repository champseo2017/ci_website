<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
    public function index()
    {

        $this->load->model("/user/member_model","select");
        $query = $this->select->selectAll();

        foreach ( $query->result() as $row )
        {
            echo $row->firstname;
            echo "<br/>";
        }
        

    }
    public function add($value='')
    {
        $this->load->model("/user/member_model","add");
        $this->add->insert();
        echo $this->uri->segment(2);

        // $data = array();
        // $data["title"] = "DekIT.TV";
        // $data["welcome"] = "Welcome to DekIT.TV"; 
        // $this->load->view("welcome_message",$data);
        // $this->load->view("/layout/content");
        // $this->load->view("/layout/footer");
    }
    public function update($value='')
    {
        $this->load->model("/user/member_model","update");
        $this->update->update();
        echo $this->uri->segment(2);
    }
    public function delete($value='')
    {
        $this->load->model("/user/member_model","delete");
        $this->delete->delete();
        echo $this->uri->segment(2);
    }
}