<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_model');
		$this->load->model('taxpaper_model');
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['suppliers'] = $this->supplier_model->getSuppliers();

		$this->load->view('header');
		$this->load->view('supplier', $data);
		$this->load->view('footer');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function create()
	{
		$data['taxpapers'] = $this->taxpaper_model->getTaxpapers();

		$this->load->view('header');
		$this->load->view('createsupplier', $data);
		$this->load->view('footer');
	}

	/**
	 * Store Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/category/store
	 *
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function store()
	{
		$data = array(
					'id_taxpaper' => $this->input->post('id_taxpaper'),
					'identification_number' => $this->input->post('identification_number'),
					'company_name' => $this->input->post('company_name'),
					'representative' => $this->input->post('representative'),
					'phone' => $this->input->post('phone')
				);
					
		$query = $this->supplier_model->storeSupplier($data);

		if($query)
		{
			$data = array(
						'status_store' => '1',
					);

			$this->session->set_userdata($data);
		}
		else
		{
			$data = array(
						'status_store' => '0',
					);

			$this->session->set_userdata($data);
		}

		redirect('supplier');
	}

	/**
	 * Destroy Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/message/destroy/{$id}
	 *
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function destroy()
	{
		$id = $this->uri->segment(3);

		$query = $this->db->delete('suppliers', array('id_supplier' => $id));

		if($query)
		{

			$data = array(
						'status_delete' => '1',
					);

			$this->session->set_userdata($data);
		}
		else
		{

			$data = array(
						'status_delete' => '0',
					);

			$this->session->set_userdata($data);
		}

		redirect('supplier');
	}

	/**
	 * Edit Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/category/destroy/{$id}
	 *
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function edit()
	{	
		$id = $this->uri->segment(3);
			
		$data = array(
					'id_supplier' => $id
					);
		
		$data['supplier'] = $this->supplier_model->getSupplier($data);
		$data['taxpapers'] = $this->taxpaper_model->getTaxpapers();

		$this->load->view('header');
		$this->load->view('editsupplier', $data);
		$this->load->view('footer');
	}

	/**
	 * Update Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/category/destroy/{$id}
	 *
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function update()
	{
		$data = $this->input->post();

		$this->supplier_model->updateSupplier($data);

		$data = array(
					'status_update' => '1',
					);

		$this->session->set_userdata($data);
		
		redirect('supplier');
	}
}
