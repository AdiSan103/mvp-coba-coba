<?php 

//childcontroller artinya class controller dapat terkoneksi ke core/controller.php(bagian class Controller)
class Form extends Controller {
	public function index()
	{
		$data['judul'] = 'Form';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('form/index');
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if($this->model('db_pelanggan_kursus')->tambahPelangganKursus($_POST) > 0) {
			header('Location: ' . BASEURL . '/form/index');
			exit;
		} else {
			header('Location: ' . BASEURL . '/form/index');
			exit;
		}
	}
}