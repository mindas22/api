<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * This controller class is used for getting data form model and sending to view
 * There are two methods. index method returns default list of breached sites
 * view method takes site name as filter parameter. 
 */

class top10 extends CI_Controller {

	public function index()
	{	
		$this->load->model('Breaches_Model');
		$data['records'] = $this->Breaches_Model->getTopTenBreaches();
		$this->load->view('breaches_view', $data);
	}
}
