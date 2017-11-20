<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * This controller class is used for getting data form model and sending to view
 * There are two methods
 */
class breaches extends CI_Controller {

	public function view($name)
	{
		$this->load->model('Breaches_Model');
		$data['records'] = $this->Breaches_Model->findByName($name);
		$this->load->view('breaches_view', $data);
	}
	
	public function index()
	{
		$this->load->model('Breaches_Model');
		$data['records'] = $this->Breaches_Model->getAllData();
		$this->load->view('breaches_view', $data);
	}
}
