<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Authentication extends CI_Controller {
	
    function __construct(){
		parent::__construct();
		
		// Load google oauth library
        $this->load->library('google');
		
		// Load user model
		$this->load->model('user');
		$this->lodgingTable = 'general_lodging';
		$this->amenitiesTable 	= 'amenities_lodging';
		$this->CustomAmenitiesTable 	= 'custom_amenities';
    }
    
    public function index(){
		// Redirect to profile page if the user already logged in
		if($this->session->userdata('loggedIn') == true){
			redirect('user_authentication/profile/');
		}
		
		if(isset($_GET['code'])){
			
			// Authenticate user with google
			if($this->google->getAuthenticate()){
			
				// Get user info from google
				$gpInfo = $this->google->getUserInfo();
				
				// Preparing data for database insertion
				$userData['oauth_provider'] = 'google';
				$userData['oauth_uid'] 		= $gpInfo['id'];
				$userData['first_name'] 	= $gpInfo['given_name'];
				$userData['last_name'] 		= $gpInfo['family_name'];
				$userData['email'] 			= $gpInfo['email'];
				$userData['gender'] 		= !empty($gpInfo['gender'])?$gpInfo['gender']:'';
				$userData['locale'] 		= !empty($gpInfo['locale'])?$gpInfo['locale']:'';
				$userData['link'] 			= !empty($gpInfo['link'])?$gpInfo['link']:'';
				$userData['picture'] 		= !empty($gpInfo['picture'])?$gpInfo['picture']:'';
				
				// Insert or update user data to the database
				$userID = $this->user->checkUser($userData);
				
				// Store the status and user profile info into session
				$this->session->set_userdata('loggedIn', true);
				$this->session->set_userdata('userData', $userData);
				
				// Redirect to profile page
				redirect('user_authentication/profile/');
			}
		} 
		
		// Google authentication url
		$data['loginURL'] = $this->google->loginURL();
		
		// Load google login view
		$this->load->view('user_authentication/index',$data);
    }
	
	public function profile(){
	
		if(!$this->session->userdata('loggedIn')){
			redirect('/user_authentication/');
		}
		

		$data['userData'] = $this->session->userdata('userData');

		$data['userLodging'] = $this->db->get_where($this->lodgingTable, array('owner_id' => $data['userData']['oauth_uid']))->result_array();
		

		$this->load->view('header',$data);
		$this->load->view('user_authentication/dashboard',$data);
		$this->load->view('footer',$data);
	}

	public function lodging_details(){

		if(!$this->session->userdata('loggedIn')){
			redirect('/user_authentication/');
		}
		
	
		$data['userData'] = $this->session->userdata('userData');

		$data['userLodging'] = $this->db->get_where($this->lodgingTable, array('owner_id' => $data['userData']['oauth_uid']))->result_array();
		

		$this->load->view('header',$data);
		$this->load->view('user_authentication/lodging_details',$data);
		$this->load->view('footer',$data);
	}

	public function amenities_details(){

		if(!$this->session->userdata('loggedIn')){
			redirect('/user_authentication/');
		}
		

		$data['userData']			= $this->session->userdata('userData');

		$data['userLodging'] 		= $this->db->get_where($this->lodgingTable, array('owner_id' => $data['userData']['oauth_uid']))->result_array();

		$data['amenities_checked'] 	= $this->db->select('amenities')->get_where($this->amenitiesTable, array('owner_id' => $data['userData']['oauth_uid']))->result_array();

		$data['amenities_custom'] 	= $this->db->get_where($this->CustomAmenitiesTable, array('owner_id' => $data['userData']['oauth_uid']))->result_array();

		$data['amenities_list'] 	= $this->db->get('amenities')->result_array();
		

		$this->load->view('header',$data);
		$this->load->view('user_authentication/amenities',$data);
		$this->load->view('footer',$data);
	}

	public function lodging_homepage(){

		if(!$this->session->userdata('loggedIn')){
			redirect('/user_authentication/');
		}
		
		$data['userData'] = $this->session->userdata('userData');

		$data['userLodging'] = $this->db->get_where($this->lodgingTable, array('owner_id' => $data['userData']['oauth_uid']))->result_array();
		
		$this->load->view('header',$data);
		$this->load->view('user_authentication/homepage_setting',$data);
		$this->load->view('footer',$data);
	}
	
	public function logout(){
		// Delete login status & user info from session
		$this->session->unset_userdata('loggedIn');
		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
		
		// Redirect to login page
		redirect('/user_authentication/');
    }
	
}