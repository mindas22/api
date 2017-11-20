<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This model class is used for grabing data from database.
 * There are three methods: getAllData, getTopTenBreaches, findByName
 */


class Breaches_Model extends CI_Model {
		// This method is getting all data from 'breached_sites' table.
	public function getAllData() 
	{
		 return $this->db->get('breached_sites')->result(); 
	}
		// This method is getting data from table column "Name" and "PwnCount" top 10 based on PwnCount count
	public function getTopTenBreaches() 
	{
		$query = $this->db->query('SELECT Name, PwnCount from breached_sites order by PwnCount desc limit 10;');
		return $query->result();
	}

		// This method is getting single value based on parameter "name" in url ...breaches/{name}
	public function findByName($name)
	{
		return $this->db->where('Name',$name)->limit(1)->get('breached_sites')->row();
	}
}	


?>