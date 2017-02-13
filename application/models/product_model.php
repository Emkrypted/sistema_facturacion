<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getProducts()
	{
		$query = $this->db->get('products');

		if($query->num_rows() > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	}

	function storeProduct($data)
	{
	 	$query = $this->db->insert('products', array('id_category' => $data['id_category'], 'id_presentation' => $data['id_presentation'], 'id_brand' => $data['id_brand'], 'name' => $data['name'], 'buy_price' => $data['buy_price'], 'sell_price' => $data['sell_price'], 'stock' => $data['stock'], 'minimal' => $data['minimal']));
		
		if($query)
		{ 
			return true;
		}
		else
		{
			return false;
		}
	}

	function getProduct($data)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id_product = '.$data['id_product']);
		
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
	
	function updateProduct($data)
	{
		$this->db->set('product', $data['product']);
		$this->db->where('id_product',  $data['id_product']);
		$query = $this->db->update('products');
		
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
