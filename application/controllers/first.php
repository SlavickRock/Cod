<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {


	public function index()
	{
		$this->load->view('hello_v');
	}
	function about($id){
		$data['name'] ="Slavick";
		$data['surname'] = "Babiy";
		$data['age'] = 27;
 $this->load->view('about_v', $data);
 if ($id=1) {
 	echo "параметр";
 }
	}
	function articles()
	{
		$this->load->model('articles_m');
		$data['cilesson'] =$this->articles_m->get_articles();
		$this->load->view('articles_v',$data);
	}
	function add_articles()
	{
		$data['title'] ="Пятая статья";
		$data['text'] ="Кроме договоров в данный сборник также входят образцы
		претензий, исковых заявлений, учредительных документов, актов и других, необходимых
		 для ведения хозяйственной деятельности документов. Общее количество
		 содержащихся в сборнике документов - 300.";
		$data['date'] ="2016-10-22";
		$this->load->model('articles_m');
		$this->articles_m->add_articles($data);
	}

	function edit_articles()
	{
		$data['title'] ="Пятая статья New";
		$data['text'] ="Text";
		$data['date'] ="2016-10-29";
		$this->load->model('articles_m');
		$this->articles_m->edit_articles($data);
	}
	function delet_articles($id)
	{
		$this->load->model('articles_m');
		$this->articles_m->delet_articles($id);
	}
}
