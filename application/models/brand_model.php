<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brand_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getBrands()
	{
		$query = $this->db->get('brands');

		if($query->num_rows() > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	}

	function storeBrand($data)
	{
	 	$query = $this->db->insert('brands', array('brand' => $data['brand']));
		
		if($query)
		{ 
			return true;
		}
		else
		{
			return false;
		}
	}

	function getBrand($data)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('id_brand = '.$data['id_brand']);
		
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
	
	function updateBrand($data)
	{
		$this->db->set('brand', $data['brand']);
		$this->db->where('id_brand',  $data['id_brand']);
		$query = $this->db->update('brands');
		
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
