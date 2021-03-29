<?php
class Login extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('Auth');
	}
 
	public function index() 
	{
		$this->load->view("login_page");
	}
 
	public function user()
	{
		$data['login'] = $this->Auth->login();
		$this->load->view('home_admin', $data);
	}
	public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}