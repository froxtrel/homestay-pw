<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lodging extends CI_Model {

	function __construct() {

		$this->lodgingTable 			= 'general_lodging';
		$this->amenitiesTable 			= 'amenities_lodging';
		$this->CustomAmenitiesTable 	= 'custom_amenities';

	}


	public function checkIfExist($table,$owner_id)
	{

		$check = $this->db->get_where($table,array('owner_id' => $owner_id));

		if($check->num_rows() > 0 )
		{			
			return true;

		} else {

		   return false;

		}
	}
	
	public function insertGeneralData($data)
	{

		$url   = str_replace(' ','-',$data['base_url']);

		$data  = array(

	        'currency' 			=> $data['base_currency'],
	        'currency' 			=> $data['base_currency'],
	        'address' 			=> $data['base_address'],
	        'phone' 			=> $data['base_phone'],
	        'name' 				=> $data['base_name'],
	        'country' 			=> $data['base_country'],
	        'region' 			=> $data['base_region'],
	        'postal_code' 		=> $data['base_postal'],
	        'email' 			=> $data['base_email'],
	        'description' 		=> $data['base_desc'],
	        'latitude' 			=> $data['base_langitude'],
	        'longitude' 		=> $data['base_longitude'],
	        'facebook' 			=> $data['base_facebook'],
	        'instagram' 		=> $data['base_instagram'],
	        'twitter' 			=> $data['base_twitter'],
	        'pinterest' 		=> $data['base_pinterest'],
	        'is_pet' 			=> $data['pol_pets'],
	        'is_children_bed' 	=> $data['pol_children_bed'],
	        'check_in' 			=> $data['pol_check_in'],
	        'check_out' 		=> $data['pol_check_out'],
	        'owner_id' 			=> $data['owner_id'],
	        'url' 		    	=> $url

		);

		if($this->checkIfExist($this->lodgingTable,$data['owner_id']))
		{			
			$this->db->where('owner_id', $data['owner_id']);
			$this->db->update($this->lodgingTable, $data);

		} else {

		   $this->db->insert($this->lodgingTable, $data);

		}
		
		return $this->checkIfExist($this->lodgingTable,$data['owner_id']);
	}

	public function insertAmenitiesList($amenities,$owner_id)
	{
		$data  = array(

	        'amenities' 		 => $amenities,
	        'owner_id' 			 => $owner_id   
		);

		if($this->checkIfExist($this->amenitiesTable,$owner_id))
		{			
			$this->db->where('owner_id', $owner_id);
			$this->db->update($this->amenitiesTable, $data);

		} else {

		   $this->db->insert($this->amenitiesTable, $data);

		}

		return $this->checkIfExist($this->amenitiesTable,$owner_id);
	}

	public function insertCustomAmenities($data,$owner_id)
	{
		$data = array(

        'amenities' => $data['amenities_name'],
        'state'     => 1,
        'owner_id'  => $owner_id
		);

		$query = $this->db->insert($this->CustomAmenitiesTable, $data);

		return $query;
	}
}
