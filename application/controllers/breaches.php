<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * This controller class is used for getting data form model and sending to view
 * There are two methods. index method returns default list of breached sites
 * view method takes site name as filter parameter. 
 */
class breaches extends CI_Controller {
  /**
  * This method to search  breached site by name 
  * result set countains one record if search criteria is satisfied
  * (view is removed from url using routes) 
  */
	public function view($name)
	{
		$this->load->model('Breaches_Model');
		$data['records'] = $this->Breaches_Model->findByName($name);
		$this->load->view('breaches_view', $data);
	}
	
	/**
  * This method returns all full list of breached sites
  * 
  */
	public function index()
	{
		$this->load->model('Breaches_Model');
		$data['records'] = $this->Breaches_Model->getAllData();
		$this->load->view('breaches_view', $data);
	}
}
