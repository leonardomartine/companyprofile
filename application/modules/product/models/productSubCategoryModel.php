<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductSubCategoryModel extends CI_Model
{
  private $_table = 'product_sub_category';
  private $_tableView = '';

  public function rules() {
    return array(
		[
			'field' => 'product_category_id',
			'label' => 'Category',
			'rules' => 'trim|required'
		],
      [
        'field' => 'name',
        'label' => 'Name',
        'rules' => 'required'
      ],

    );
  }

  public function getAll() {
    return $this->db->order_by('name', 'asc')->get($this->_table)->result();
  }

public function getAllPaginate($params = [], $orders = [], $limit = null, $offset = null) {
	return $this->db->where($params)->order_by($orders)->get($this->_table, $limit, $offset)->result();
}

  public function getFiltered($productCategory) {
    return $this->db->where('product_category_id', $productCategory)
		->order_by('name', 'asc')->get($this->_table)->result();
  }

  public function getDetail($where, $value) {
    return $this->db->get_where($this->_table, [$where => $value])->row();
  }

	public function getRowCount(){
		return $this->db->get($this->_table)->num_rows();
	}

  public function insert() {
    $response = array('status' => false, 'data' => 'No operation.');

    try {
      $post = $this->input->post();
  
      $this->product_category_id = $post['product_category_id'];
      $this->name = $post['name'];
	  $this->image = $post['image'];
      $this->db->insert($this->_table, $this);

      $response = array('status' => true, 'data' => 'Data has been saved.');
    } catch (\Throwable $th) {
      $response = array('status' => false, 'data' => 'Failed to save your data.');
    };

    return $response;
  }

  public function update($id) {
    $response = array('status' => false, 'data' => 'No operation.');
	  $temp = $this->getDetail('id', $id);

    try {
      $post = $this->input->post();
		$post['image'] = (!empty($post['image'])) ? $post['image'] : $temp->image;

	  $this->product_category_id = $post['product_category_id'];
      $this->name = $post['name'];
	  $this->image = $post['image'];
      $this->db->update($this->_table, $this, ['id' => $id]);

      $response = array('status' => true, 'data' => 'Data has been saved.');
    } catch (\Throwable $th) {
      $response = array('status' => false, 'data' => 'Failed to save your data.');
    };

    return $response;
  }

  public function delete($id) {
    $response = array('status' => false, 'data' => 'No operation.');

    try {
      $this->db->delete($this->_table, ['id' => $id]);
      $response = array('status' => true, 'data' => 'Data has been deleted.');
    } catch (\Throwable $th) {
      $response = array('status' => false, 'data' => 'Failed to delete your data.');
    };

    return $response;
  }
}
