<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wkd extends CI_Controller {
	 
	public function index()
	{
		$this->load->view('wikid');
	}
}
