<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_Model extends CI_Model
{
    public function selectAll ()
    {
        $this->db->select("id,firstname");
        $this->db->order_by("id","asc");

        $query = $this->db->get("member");
        return $query;
    }
    public function insert()
    {
        $dataList = array();
        $dataList["firstname"] = "MyFirstname";
        $dataList["lastname"] = "MyLastName";
        $dataList["sex"] = "1";

        $this->db->insert("member",$dataList);
    }
    public function update()
    {
        $whereList["ID"] = "0";
        $dataList["firstname"] = "YourFirstname";
        $dataList["lastname"] = "YourLastName";
        $dataList["sex"] = "1";

        $this->db->where($whereList);
        $this->db->update("member",$dataList);
    }
    public function delete()
    {
        $whereList = array();
        $whereList["ID"] = "0";

        $this->db->where($whereList);
        $this->db->delete("member");
    }
}