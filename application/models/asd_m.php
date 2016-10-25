<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asd_m extends CI_Model {


function gets()
{
    //$this->db->select('product_name,price,product_category');
      $this->db->limit(5);
  $rez=$this->db->get('Products');
  return $rez->result_array();
}


}
?>
