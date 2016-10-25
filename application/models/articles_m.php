<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_m extends CI_Model {

function get_articles()
{
        
  $qery =$this->db->get('cilesson');
return $qery->result_array();
}
function add_articles($data)
{
  $this->db->insert('cilesson',$data);

}
function edit_articles($data)
{
  $this->db->where('id','5');
  $this->db->update('cilesson',$data);
}
function delet_articles($id)
{
  $this->db->where('id',$id);
  $this->db->delete('cilesson');
}
}
