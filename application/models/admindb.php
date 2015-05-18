<?php

class admindb extends CI_Model 
{
	
	function adminlogin($email)
	{

		// $this->load->view('adminpages/dashboard');
		 $query = $this->db->query( "SELECT * FROM admin WHERE email = ?", array($email) );
		 return $query->row_array();
		 // // var_dump($query->result());
		 // die();
	}


//---------methods for products-----------//
	function get_all()
    {	
        $query = $this->db->query('SELECT * FROM Products'); 
        return $query->result();   
    }

    function get_product($id)
    {
    	$query = $this->db->query('SELECT * FROM Products
                                    LEFT JOIN categories on Products.categories_id = categories.categoryid
                                    WHERE Products.id = ?', array($id) ); 
        
    	return $query->row();	
    }

    function get_categories()
    {
    	$query = $this->db->query("SELECT * FROM categories");
    	return $query->result();
    }

    function create($data)
    {
    	return $this->db->query(" INSERT INTO Products (name, description, categories_id, price, quantity, imgurl, created_at, updated_at) Values(  ?,?,?,?,?,?, NOW(), NOW()    )" , array(  $data['name'], $data['description'], $data['category'], $data['price'], $data['quantity'], $data['imgurl'] )    );
    }

    function update($data)
    {
    	$query = $this->db->query("  UPDATE Products SET name = ?, description = ?, price = ?, quantity = ?, imgurl = ?, updated_at = NOW() WHERE id = ?", array( $data['name'], $data['description'], $data['price'], $data['quantity'], $data['imgurl'], $data['id']   ));
    	return $query;
    }

    function destroy($id)
    {

    	$query = $this->db->query(" DELETE FROM Products WHERE id = ? " , array($id) );
    	return $query;
    }
//---------end of methods for products-----------//


//-------------methods for orders---------------//


function get_all_orders()
    {	
        $query = $this->db->query('SELECT * FROM orders'); 
        return $query->result();   
    } 

function get_order($id)
{
    $query = $this->db->query('SELECT * FROM orders WHERE id = ?', array($id) ); 
    return $query->row();   
}

function destroy_order($id)
    {
        $query = $this->db->query(" DELETE FROM orders WHERE id = ? " , array($id) );
        return $query;
    }









}

?>
