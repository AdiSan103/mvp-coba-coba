<?php 

//childcontroller artinya class controller dapat terkoneksi ke core/controller.php(bagian class Controller)
class Home extends Controller {
	public function index()
	{
		$data['judul'] = 'Beranda';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
	public function activities()
	{
		$data['judul'] = 'aktivitas kursus';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('activities/index');
		$this->view('templates/footer');
	}
	public function coaching()
	{
		$data['judul'] = 'coaching';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('coaching/index');
		$this->view('templates/footer');
	}
	public function fun_music()
	{
		$data['judul'] = 'musik for fun';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('fun_music/index');
		$this->view('templates/footer');
	}
	public function holiday()
	{
		$data['judul'] = 'Beranda';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('holiday/index');
		$this->view('templates/footer');
	}
	public function course()
	{
		$data['judul'] = 'Program Kursus';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('course/index');
		$this->view('templates/footer');
	}
	public function profile()
	{
		$data['judul'] = 'Profile Guru';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('profile/index');
		$this->view('templates/footer');
	}
	public function theory_music()
	{
		$data['judul'] = 'Music Theory';
		//dimulau dari init.php
		$this->view('templates/header', $data);
		$this->view('theory_music/index');
		$this->view('templates/footer');
	}
}