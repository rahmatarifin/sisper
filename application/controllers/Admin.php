<?php
class Admin extends ci_controller{
	public function view($page = 'home'){
		if(!file_exists(APPPATH.'view/admin/'.$page.'.php')){
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}