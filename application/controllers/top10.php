<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class top10 extends CI_Controller {

	public function index()
	{
		$this->load->model('BreachesModel');
		$data['records'] = $this->BreachesModel->topTenBreaches();
		$this->load->view('top10Breaches_view', $data);
	}
}
