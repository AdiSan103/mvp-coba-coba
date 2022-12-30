<?php 

//untuk menghubungkan ke class Controller panggil dengan extends
class Controller {
	
	//untuk memanggil views
	public function view($view, $data = [])
	{
		//anda berada di public/index.php
		require_once '../app/views/' . $view . '.php';
	}
//sehingga harus mengisikan extends pada setiap controllers

	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model;
		// return new $new; //mengembalikan nilai dari $model
	}
}

?>