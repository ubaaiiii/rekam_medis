<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// $sesi_login = (array) $this->session->userdata('medika_users');
		// if ($sesi_login) {
		// } else {
		// 	redirect('login');
		// }
		$data = array(
			'judul'	=> 'Home',
			'page'	=> 'home/index'
		);
		$this->load->view('dashboard',$data);
	}
}
