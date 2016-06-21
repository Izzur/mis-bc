<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function dashboard() {
		$this->load->view('mis/pages/dashboard');
	}

	public function n($pages = 'dashboard') {
		$this->load->model('Chart_model');
		switch ($pages) {
			case 'production_lati': $WERKS='B300'; break;
			case 'production_binungan': $WERKS='B400'; break;
			case 'production_sambarata': $WERKS='B500'; break;
			default: $WERKS='%'; break;
		}
		$data = array(
			'chart' => $this->Chart_model->get_country(),
			'actual' => $this->Chart_model->get_actual_prod($WERKS)
		);
		$this->load->view('mis/pages/'.$pages,$data);
	}

}
?>