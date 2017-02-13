<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getUsers()
	{
		$query = $this->db->get('users');

		if($query->num_rows() > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	}

	function getUsernameUser($data)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username = "'.$data['username'].'"');

		$query = $this->db->get()->result();

		if(count($query) > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getEmailUser($data)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email = "'.$data['email'].'"');

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

	function getActivationCodeUser($data)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('activation_code = "'.$data['activation_code'].'"');

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

	function login($data)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email = "'.$data['email'].'"');
		$this->db->where('password = "'.$data['password'].'"');

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

	function storeUser($data)
	{
		$query = $this->db->insert('users', array('user_type' => $data['user_type'], 'name' => $data['name'], 'email' => $data['email'], 'username' => $data['username'], 'phone' => $data['phone'], 'password' => md5($data['password']), 'status' => $data['status'], 'date' => $data['date'], 'activation_code' => $data['activation_code']));
			
		$query = $this->db->insert_id();
			
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getUser($data)
	{
		$this->db->select('users.*, user_types.*');
		$this->db->from('users, user_types');
		$this->db->where('users.user_type = user_types.id_user_type');
		$this->db->where('users.id_user = '.$data['id_user']);
		
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

	function updateUser($data)
	{
		if(isset($data['name']))
		{
			$this->db->set('name', $data['name']);
		}
		
		if(isset($data['email']))
		{
			$this->db->set('email', $data['email']);
		}
		
		if(isset($data['phone']))
		{
			$this->db->set('phone', $data['phone']);
		}

		if(isset($data['password']))
		{
			$this->db->set('password', md5($data['password']));
		}

		if(isset($data['username']))
		{
			$this->db->set('username', $data['username']);
		}
		
		$this->db->where('id_user',  $data['id_user']);
		$query = $this->db->update('users');

		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function activateUser($data)
	{
		$this->db->set('status', 1);
		
		$this->db->where('activation_code',  $data['activation_code']);
		$query = $this->db->update('users');

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