<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class breaches extends CI_Controller {

	public function view($id)
	{
		$this->load->model('BreachesModel');
		$data['records'] = $this->BreachesModel->find_by_name($id);
		$this->load->view('listAll', $data);
	}
	
	public function index()
	{
		$this->load->model('BreachesModel');
		$data['records'] = $this->BreachesModel->getData();
		$this->load->view('listAll', $data);
	}
}
