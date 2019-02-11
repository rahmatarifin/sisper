<?php
class Login extends ci_controller{
	function __construc(){
		parent::__construc();
		$this->load->model('m_login');
	}

	function index(){
		$data['title'] = 'Login Sisper';
		$this->load->view('login', $data);
	}

	function aksilogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username' => $username,
			'password' => md5($password));
		$cek = $this->m_login->cek_login("Admin", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "Login");
			$this->session->set_userdata($data_session);
			redirect(base_url('admin'));
		}else{
			echo "username dan password salah !!";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}