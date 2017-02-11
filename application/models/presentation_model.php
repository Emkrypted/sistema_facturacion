<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presentation_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getPresentations()
	{
		$query = $this->db->get('presentations');

		if($query->num_rows() > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	}

	function storePresentation($data)
	{
	 	$query = $this->db->insert('presentations', array('presentation' => $data['presentation']));
		
		if($query)
		{ 
			return true;
		}
		else
		{
			return false;
		}
	}

	function getPresentation($data)
	{
		$this->db->select('*');
		$this->db->from('presentations');
		$this->db->where('id_presentation = '.$data['id_presentation']);
		
		$query = $this->db->get()->result();

		if(count($query) > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	}
	
	function updatePresentation($data)
	{
		$this->db->set('presentation', $data['presentation']);
		$this->db->where('id_presentation',  $data['id_presentation']);
		$query = $this->db->update('presentations');
		
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
