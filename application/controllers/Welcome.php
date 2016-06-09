<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Default_model');
		$data = array(
			'afko' => $this->Default_model->get_afko(),
			//'mara' => $this->Default_model->get_mara(),
		);
		/*$this->load->view('welcome_message');*/
		$this->load->view('query_test',$data);
	}

	public function charts() {
		$this->load->model('Chart_model');
		$data = array(
			'chart' => $this->Chart_model->get_country(),
		);
		$this->load->view('chart_test',$data);
	}

}
