<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model{

	

	public function get_all_products()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
	}
	public function sort_products($id)
	{
		return $this->db->query("SELECT * FROM products where categories_id =?", array($id))->result_array();
	}
	public function get_product($id)
	{
		return $this->db->query("SELECT * FROM products where id =?", array($id))->row_array();
	}
	public function register($data)
	{
		$query =  $this->db->query("INSERT INTO users (first_name, last_name, email, password, created_at) VALUES (?,?,?,?, NOW())",
			array($data['first_name'], $data['last_name'], $data['email'], md5($data['password'])));
	}
	public function get_user($email)
	{
		return $this->db->query("SELECT * FROM users where email =?", array($email))->row_array();
		// var_dump($query);
		// die();
	}
}