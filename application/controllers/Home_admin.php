<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home_admin extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
		$this->auth->cek_login();
	}
 
	public function index()
	{
		$this->load->view('home_admin');
	}
}