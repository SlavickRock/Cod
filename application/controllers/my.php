<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{ $this->load->helper('text_helper');


     $this->output->enable_profiler(TRUE);
		$t=$this->db->get('customer')->result_array();
    var_dump($t);
    echo ($this->db->last_query());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
