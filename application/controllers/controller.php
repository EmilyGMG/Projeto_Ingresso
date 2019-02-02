<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	
	public function index() {
	$this->load->view('corp/script');
        $this->load->view('corp/navbar');
        $this->load->view('index');
        $this->load->view('corp/footer');
	$this->load->view('css/style.css');
    }

    public function reservar() {
    	$this->load->view('corp/script');
    	$this->load->view('corp/navbar');
        $this->load->view('reservar');
        $this->load->view('corp/footer');
        $this->load->view('css/style.css');
    }
   
}
