<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taxpaper_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getTaxpapers()
	{
		$query = $this->db->get('taxpapers');

		if($query->num_rows() > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	}

	function storeTaxpaper($data)
	{
	 	$query = $this->db->insert('taxpapers', array('taxpaper' => $data['taxpaper']));
		
		if($query)
		{ 
			return true;
		}
		else
		{
			return false;
		}
	}

	function getTaxpaper($data)
	{
		$this->db->select('*');
		$this->db->from('taxpapers');
		$this->db->where('id_taxpaper = '.$data['id_taxpaper']);
		
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
	
	function updateTaxpaper($data)
	{
		$this->db->set('taxpaper', $data['taxpaper']);
		$this->db->where('id_taxpaper',  $data['id_taxpaper']);
		$query = $this->db->update('taxpapers');
		
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
