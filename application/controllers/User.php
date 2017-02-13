<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('user_model');
	}

	/**
	 * Login for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/category/create
	 *
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
		$data = array(
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password'))
				);
					
		$query = $this->user_model->login($data);

		if(count($query[0]) > 0)
		{
			$data = array(
					'id_user' => $query[0]->id_user,
					'id_user_type' => $query[0]->id_user_type,
					'name' => $query[0]->name,
					'lastname' => $query[0]->lastname,
					'email' => $query[0]->email,
					'identification_number' => $query[0]->identification_number,
					'address' => $query[0]->address,
					'phone' => $query[0]->phone
				);
					
			$this->session->set_userdata($data);

			redirect('/');
		}
		else
		{
			$data = array(
					'status_error_login' => 1,
				);

			$this->session->set_userdata($data);

			redirect('/');
		}
	}
}
