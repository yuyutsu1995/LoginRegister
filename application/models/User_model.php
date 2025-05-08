<?php

class User_model extends CI_Model
{
	function insertuser($data)
   { 
   	$this->db->insert('student',$data);
   }
}