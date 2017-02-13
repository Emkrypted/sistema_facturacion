<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getSuppliers()
	{
		$this->db->select('suppliers.*, taxpapers.*');
		$this->db->from('suppliers, taxpapers');
		$this->db->where('suppliers.id_taxpaper = taxpapers.id_taxpaper');
		$query = $this->db->get();

		if($query->num_rows() > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	}

	function storeSupplier($data)
	{
	 	$query = $this->db->insert('suppliers', array('id_taxpaper' => $data['id_taxpaper'], 'identification_number' => $data['identification_number'], 'company_name' => $data['company_name'], 'representative' => $data['representative'], 'phone' => $data['phone'], 'date' => date('Y-m-d')));
		
		if($query)
		{ 
			return true;
		}
		else
		{
			return false;
		}
	}

	function getSupplier($data)
	{
		$this->db->select('*');
		$this->db->from('suppliers');
		$this->db->where('id_supplier = '.$data['id_supplier']);
		
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
	
	function updateSupplier($data)
	{
		$this->db->set('id_taxpaper', $data['id_taxpaper']);
		$this->db->set('identification_number', $data['identification_number']);
		$this->db->set('company_name', $data['company_name']);
		$this->db->set('representative', $data['representative']);
		$this->db->set('phone', $data['phone']);
		$this->db->where('id_supplier',  $data['id_supplier']);
		$query = $this->db->update('suppliers');
		
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
