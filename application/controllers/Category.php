<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
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
		$data['categories'] = $this->category_model->getCategories();

		$this->load->view('header');
		$this->load->view('category', $data);
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
		$this->load->view('header');
		$this->load->view('createcategory');
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
					'category' => $this->input->post('category')
				);
					
		$query = $this->category_model->storeCategory($data);

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

		redirect('category');
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

		$query = $this->db->delete('categories', array('id_category' => $id));

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

		redirect('category');
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
					'id_category' => $id
					);
		
		$data['category'] = $this->category_model->getCategory($data);

		$this->load->view('header');
		$this->load->view('editcategory', $data);
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

		$this->category_model->updateCategory($data);

		$data = array(
					'status_update' => '1',
					);

		$this->session->set_userdata($data);
		
		redirect('category');
	}
}
