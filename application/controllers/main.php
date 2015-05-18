<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model('Customer');
		$this->load->library('session');
		// $this->output->enable_profiler();
		
	}

	public function index()
	{
		$this->load->view('index');

        if(!$this->session->userdata('cart'))
		{
			$cart = array(
			'total_items' => 0,
 			);
			$this->session->set_userdata('cart', $cart);
		}
	}
	public function logoff()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
	public function add_item($id)
     {
    
			$quantity = $this->input->post('quantity');
			$cart = $this->session->userdata('cart');
			

			if(array_key_exists($id, $cart))
			{
				$cart['total_items'] = $cart['total_items'] + $quantity;
				$cart[$id] = $cart[$id] + $quantity;
				$this->session->set_userdata('cart', $cart);
			}
			else
			{
				$cart['total_items'] = $cart['total_items'] + $quantity;
				$cart[$id] = $quantity;
				$this->session->set_userdata('cart', $cart);
			}
			redirect('/main/cart');
		
 	}
 	public function delete($id)
 	{
 		$cart = $this->session->userdata('cart');
 		$total_items = $this->session->userdata('cart')['total_items'];
 		$total_items = $total_items - $cart[$id];
 		$cart['total_items'] = $total_items;
 		unset($cart[$id]);
 		$this->session->set_userdata('cart', $cart);
 		redirect('/main/cart');
 	}
 	public function update($id)
 	{
 		$cart = $this->session->userdata('cart');
 		$total_items = $this->session->userdata('cart')['total_items'];
 		$total_items = $total_items - $cart[$id];
 		$cart['total_items'] = $total_items;
 		unset($cart[$id]);
 		$this->session->set_userdata('cart', $cart);
 		$product = $this->Customer->get_product($id);
		$this->load->view('product_view', array('product' => $product));
 	}
	public function cart()
	{
		$cart = $this->session->userdata('cart');
		$show_cart = array();
		$total_price = 0;
		foreach ($cart as $key => $value) 
		{
			if($key != 'total_items')
			{
				$item = $this->Customer->get_product($key);
				
				$show_cart[] = array(
						'id' => $item['id'],
						'name' =>$item['name'],
						'quantity' => $value,
						'price' => $item['price'],
						'subtotal' => ($item['price'] * $value),
														);
				$total_price += ($item['price'] * $value);
			}
		}
		$show_cart['total_price'] = $total_price;
		$send['cart'] = $show_cart;
		$this->load->view('cart', $send); 
	}
	public function product_category()
	{
		$products = $this->Customer->get_all_products();
		$this->load->view('product_category', array('products' => $products));
	}
	public function sort($id)
	{
		$products = $this->Customer->sort_products($id);
		$this->load->view('product_category', array('products' => $products));
	}
	public function product_view($id)
	{
		$product = $this->Customer->get_product($id);
		$this->load->view('product_view', array('product' => $product));
	}
	public function login()
	{

		$this->load->view('login');
	}
	public function reg_user()
	{
		
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "required|valid_email");
		$this->form_validation->set_rules("password", "Password", "min_length[6]");
		$this->form_validation->set_rules("confirm", "Password Confirmation", "matches[password]");
		
		if($this->form_validation->run() === FALSE)
		{
			$errors = $this->form_validation->error_string();
			$this->session->set_flashdata('errors', $errors);
			redirect("/main/login");
		}
		else
		{
			$this->Customer->register($this->input->post());
			$this->session->set_flashdata('success', 'Account successfully created!');
			redirect("/main/login");

		}
	}
	public function user_login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		// $this->load->model('Customer');
		$user = $this->Customer->get_user($email);
		// var_dump($user);
		// die();
		if($user && ($user['password']) == $password)
		{
			$arr = array(
				'user_id' => $user['id'],
				'user_fname' => $user['first_name'],
				'user_lname' => $user['last_name'],
				'is_login' => true
				);
			$this->session->set_userdata($arr);
			redirect("/");
		}
		else
		{
			$this->session->set_flashdata('errors', "<p>Invalid email or password!</p>");
			redirect('/main/login');
		}
	}
	public function payment()
	{
		var_dump($this->input->post());
		var_dump($this->session->userdata('cart'));
		die();
		redirect('/main/login');
	}



		

}

//end of main controller
