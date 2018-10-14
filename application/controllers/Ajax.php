<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	 function __construct(){
		parent::__construct();	
		
		// Load user model
		$this->load->model('lodging');
    }
    

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function insertLodgeData()
	{	
		
		$status = $this->lodging->insertGeneralData($this->input->post());
		print_r($status);
				
	}

	public function insertAmenitiesData()
	{	

		$user['userData'] 	= $this->session->userdata('userData');

		$data      			= array_keys($this->input->post());
		$amenities 			= str_replace('_',' ',implode(",", $data));
		$status    			= $this->lodging->insertAmenitiesList($amenities,$user['userData']['oauth_uid']);
		print_r($status);		
				
	}

	public function insertCustomAmenitiesData()
	{	
		$user['userData'] 	= $this->session->userdata('userData');
		$status    			= $this->lodging->insertCustomAmenities($this->input->post(),$user['userData']['oauth_uid']);
		
		echo $this->input->post('amenities_name');
				
	}
}
