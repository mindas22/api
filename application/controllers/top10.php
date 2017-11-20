<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class top10 extends CI_Controller {

	public function index()
	{	
		$this->load->model('Breaches_Model');
		$data['records'] = $this->Breaches_Model->getTopTenBreaches();
		$this->load->view('top_ten_breaches_view', $data);
	}
}
