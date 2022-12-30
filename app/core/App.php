<?php

//mengatur url dominan
class App
{

	protected $controller = 'HomeController';
	protected $method = 'index';
	protected $params = [];


	//mengatur url
	public function __construct()
	{
		//menangkap $url dari function parseURL
		$url = $this->parseURL();
		//mengecek file dalam controller
		if (file_exists('../app/controllers/' . $url[0] . '.php')) {
			//jika ada, timpa
			$this->controller = $url[0];
			unset($url[0]);
			//hilangkan controller dari elemen array

		}

		//memangil controller baru
		require_once '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		//method
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				// //timpa jika ada

				unset($url[1]);
			}
		}

		//params
		if (!empty($url)) {
			$this->params = array_values($url);
		}

		//jalankan controller dan method, serta kirimkan params jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseURL()
	{
		//jika ada url yang dikirim
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			//menghapus tanda '/' diakhir
			$url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan dari karakter aneh
			$url = explode('/', $url); //memecah karakter url,menghilangkan '/'


			//kembalikan nilai url yang rapi
			return $url;
		}
	}
}
