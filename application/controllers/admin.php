<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('adminpages/adminlogin');
	}

	public function login()
	{
		// form validation
		$this->load->helper('form');				//load form helper
		$this->load->library ('form_validation');	//load form validation library

		//setting validation rules
		$this->form_validation->set_rules('email', 'eMail', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)				
		{	//if input form is not filled in correcyly
			$this->session->flashdata('errors');
			$errors = validation_errors();
			$this->session->set_flashdata('errors', $errors);
			redirect ("/admin");
		}
		else
		{	//if all the fields are filled in correctly, proceed to verify cridentials
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$this->load->model('admindb');	//load model
			$admin = $this->admindb->adminlogin($email);	// load function in the model
			
			if($admin && $admin['password'] == $password)
			{
				$user = array(
					'admin_id' => $admin['id'],
					'admin_email' => $admin['email'],
					'admin_name' => $admin['first_name'] .' '. $admin['last_name'], 
					'is_logged_in' => true
					);
				$this->session->set_userdata($user);
				redirect('/admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('errors', "<p>Not an Admin</p>");
				redirect ("/admin");
			}
		}
	}

	public function dashboard()
	{
		if($this->session->userdata('is_logged_in') == TRUE)
		{
			$this->load->view('adminpages/dashboard');
		}
		else
		{
			$this->session->flashdata('errors');
			$errors = "You have been logged out";
			$this->session->set_flashdata('errors', $errors);
			redirect('/admin/adminlogin');
		}
	}


//---------methods for products-----------//
	public function inventory()
	{
		$this->load->model('admindb');
		$products = $this->admindb->get_all();
		$this->load->view('adminpages/inventory', array("products" => $products));
	}


	public function add()
	{
		$this->load->model('admindb');
		$categories = $this->admindb->get_categories();
		$this->load->view('adminpages/add', array("categories" => $categories));
	}

	public function create()
	{
		$this->load->model('admindb');
		$this->admindb->create($this->input->post());
		redirect('/admin/inventory');	
	}


	public function show($id)
	{
		$this->load->model('admindb');
		$productshow = $this->admindb->get_product($id);
		$this->load->view('adminpages/productshow', array("product" => $productshow));
	}

	public function edit($id)
	{
		$this->load->model('admindb');
		$productshow = $this->admindb->get_product($id);
		$categories = $this->admindb->get_categories();
		$this->load->view('adminpages/edit', array("product" => $productshow,
												   "categories" => $categories ));
	}

	public function update()
	{
		$this->load->model('admindb');
		$this->admindb->update($this->input->post());
		redirect('/admin/show/' . $this->input->post('id'));
	}

	public function destroy($id)
	{
		$this->load->model('admindb');
		$this->admindb->destroy($id);
		redirect('/admin/inventory');
	}
//---------------- end of methods for products ---------------- //


//---------------- methods for orders ---------------- //

public function orders()
	{
		$this->load->model('admindb');
		$orders = $this->admindb->get_all_orders();
		$this->load->view('adminpages/orders/allorders', array("orders" => $orders));
	}

public function show_single_order($id)
	{
		$this->load->model('admindb');
		$ordershow = $this->admindb->get_order($id);
		$this->load->view('adminpages/orders/singleorder', array("order" => $ordershow));
	}

public function edit_order($id)
	{
		$this->load->model('admindb');

	}

public function destroy_order($id)
	{
		$this->load->model('admindb');
		$this->admindb->destroy_order($id);
		redirect('/admin/orders');
	}

















//---------------- end of methods for orders ---------------- //







}