<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function dashboard() {
		$this->load->view('mis/pages/dashboard');
	}

	public function n($pages = 'dashboard') {
		$this->load->view('mis/pages/'.$pages);
	}

}
?>