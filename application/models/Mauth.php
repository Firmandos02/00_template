<?php
class Mauth extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function selactive()
    {
        $query  = $this->db->query("
            select * 
            from users
            where 1=1
            and role = 0
            and active = 1
        ");

        return $query->row_array();
    }
    public function getRole()
    {
        $query  = $this->db->query(
            "
            SELECT  a.id, a.description
            from role AS a
        ");
        return $query->result_array();
    }
    public function getUser()
    {
        $query  = $this->db->query("
			SELECT a.* , b.description AS access FROM users AS a
			LEFT JOIN role AS b ON b.id = a.role
        ");
        return $query->result_array();
    }
}
