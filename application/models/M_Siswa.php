<?php
class M_siswa extends ci_model{
	private $_table = "siswa";

	public $nis;
	public $nama;
	public $alamat;
	public $images = "default.jpg";

	public function rules(){
		return[
			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required'],

			['field' => 'alamat',
			'label' => 'Alamat',
			'rules' => 'required'],

			['field' => 'nis',
			'label' => 'Nis',
			'rules' => 'numeric']
		];
	}

	function getall(){
		return $this->db->get($this->_table)->result();
	}
}