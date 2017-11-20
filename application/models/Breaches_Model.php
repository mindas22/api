<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * (database is loaded automaticaly, see config/autoload.php)
 * This model class is used for retrieving data from database.
 * There are three methods: getAllData, getTopTenBreaches, findByName
 */


class Breaches_Model extends CI_Model {
	/** This method gets all data from 'breached_sites' table. 
	 * With no parameter, and no filter returns all table content as per table schema.
	 */
	public function getAllData() 
	{
		return $this->db->get('breached_sites')->result(); 
	}


	/** This method returns top 10 sites by breached accounts result incudes site 
	 * name and breaches count number. There is no additional parameter for filtering.
	 */
	public function getTopTenBreaches() 
	{
		$query = $this->db->query('SELECT Name, PwnCount from breached_sites order by PwnCount desc limit 10;');
		return $query->result();
	}

	/** This method searches for potential breached site in the database, 
	 * takes as site name as a parameter . "name" in url .../breaches/{name}
	 */
	public function findByName($name)
	{
		return $this->db->where('Name',$name)->limit(1)->get('breached_sites')->row();
	}
}	


?>