<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {


	public function index()
	{ $this->load->library('form_validation');
    $this->load->model('rules_m');
 		$data['category'] =$this->rules_m-> get_category();
    $product['product'] =$this->rules_m->get_products();

  if (isset($_POST['add']))
  {
    $this->load->model('rules_m');
    $this->form_validation->set_rules($this->rules_m->add_rules);
    $check =$this->form_validation->run();
    if ($check==TRUE) {
      $add['product_name'] = $this->input->post('product_name');
      $add['product_category'] = $this->input->post('category');
      $add['product_description'] = $this->input->post('text');
      $add['price'] = $this->input->post('price');
      $this->db->insert('Products',$add);
      $this->load->view('info_v') ;
    }else {
			$this->load->view('shop_v',$data);
	    $this->load->view('shopProd_v',$product);

    }

}

elseif (isset($_POST['update']))
 {$id = $this->input->post('id');
   $this->load->model('rules_m');
   $this->form_validation->set_rules($this->rules_m->update_rules);
   $check =$this->form_validation->run();
     if ($check==TRUE ) {
     $add['product_name'] = $this->input->post('product_name');
     $add['product_category'] = $this->input->post('category');
     $add['product_description'] = $this->input->post('text');
     $add['price'] = $this->input->post('price');
     $this->rules_m->edit_product($add ,$id);
     $this->load->view('info_v') ;
}else {
	$this->load->view('shop_v',$data);
	$this->load->view('shopProd_v',$product);

}

	}

  elseif (isset($_POST['id_del']))
  { $id = $this->input->post('id_delete');
    $this->load->model('rules_m');
    $this->rules_m->delete_product($id);
    $this->load->view('info_v') ;

  }
	elseif (isset($_POST['desk'])) {
		$this->load->model('rules_m');
		$product['product']= $this->rules_m->desk();
		$this->load->view('shop_v',$data);
		$this->load->view('shopProd_v',$product);
	}
	elseif (isset($_POST['beack'])) {
		$this->load->view('shop_v',$data);
    $this->load->view('shopProd_v',$product);
	}
  else {
    $this->load->view('shop_v',$data);
    $this->load->view('shopProd_v',$product);
  }
	}
}
