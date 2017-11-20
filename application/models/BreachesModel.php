<?php

class BreachesModel extends CI_Model {

	public function getData() {

		$query = $this->db->get('listofbreaches');
		return $query->result();

	}

	public function topTenBreaches() {

		$query = $this->db->query('SELECT DISTINCT list_Name, list_PwnCount from listofbreaches order by 2 desc limit 10;');
		return $query->result();
	}


public function find_by_name($id)
	{
		return $this->db->where('list_Name',$id)->limit(1)->get('listofbreaches')->row();
	}
}	


?>