<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules_m extends CI_Model {

public $add_rules  = array(
  array('field' => 'product_name',
        'lable' => 'Название продукта',
        'rules' => 'required|xss_clean|min_length[3]|max_length[50]|trim' ),
        array('field' => 'text',
              'lable' => 'Описание',
              'rules' => 'required|xss_clean|min_length[3]|trim' ),
              array('field' => 'price',
                    'lable' => 'Цена',
                    'rules' => 'required|xss_clean' )
 );

public $update_rules  = array(
   array('field' => 'product_name',
         'lable' => 'Название продукта',
         'rules' => 'required|xss_clean|min_length[3]|max_length[50]|trim' ),
         array('field' => 'text',
               'lable' => 'Описание',
               'rules' => 'required|xss_clean|min_length[3]|trim' ),
               array('field' => 'price',
                     'lable' => 'Цена',
                     'rules' => 'required|xss_clean' ),
                     array('field' => 'id',
                           'lable' => 'Введите id товара который хотите обновить',
                           'rules' => 'required|xss_clean' )
  );

function get_products()
{
  $querty = $this->db->get('Products');
  return $querty->result_array();
}

 function get_category()
 {

   $qery =$this->db->get('category');
 return $qery->result_array();
 }
 function edit_product($add ,$id)
 {
   $this->db->where('id', $id);
   $this->db->update('Products',$add);
 }
 function delete_product($id)
 {
   $this->db->where('id',$id);
   $this->db->delete('Products');
 }
 function desk()
 {
   $this->db->order_by("id", "desc");
 return $desk=$this->db->get('Products')->result_array();


 }
}
