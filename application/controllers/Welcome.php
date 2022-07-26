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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	 public function index()
	{
		$this->load->view('header');
		$this->load->view('inicio');
		$this->load->view('footer');

	}

	// INDEX/INICIO FUNCTIONS

	public function gotodesing()
	{
		$this->load->view('header');
		$this->load->view('pagedesing');
		$this->load->view('footer');
	}

	public function gotoprogramation(){
		$this->load->view('header');
		$this->load->view('programation');
		$this->load->view('footer');
	}

	public function gotoauthorcontent(){
		$this->load->view('header');
		$this->load->view('authorcontent');
		$this->load->view('footer');
	}

	// AUTHOR CONTENT FUNCTIONS

	public function gotoyoutube(){
		$this->load->view('header');
		$this->load->view('youtube');
		$this->load->view('footer');
	}

	public function gototiktok(){
		$this->load->view('header');
		$this->load->view('tiktok');
		$this->load->view('footer');
	}


	public function gotorecommendation(){
		$this->load->view('header');
		$this->load->view('recommendation');
		$this->load->view('footer');
	}

}
