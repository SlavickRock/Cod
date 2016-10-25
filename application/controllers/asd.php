<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asd extends CI_Controller {


public function index()
{

$this->load->model('asd_m');
$asd['asd']=$this->asd_m->gets();
$this->load->view('asd_v',$asd);
echo ($this->db->last_query());
}



}
