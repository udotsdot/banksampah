<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Bank Sampah Jejama Secancanan";
		echo view('template/header', $data);
		echo view('index');
		echo view('template/navbar');
		echo view('template/footer');
	}

	public function login()
	{
		$data['title'] = "Login";
		echo view('template/header', $data);
		echo view('login');
		echo view('template/navbar');
		echo view('template/footer');
	}

	public function register()
	{
		$data['title'] = "Registration";
		echo view('template/header', $data);
		echo view('registration');
		echo view('template/navbar');
		echo view('template/footer');
	}

	public function about()
	{
		$data['title'] = "About";
		echo view('template/header', $data);
		echo view('about');
		echo view('template/navbar');
		echo view('template/footer');
	}

	public function tps3r()
	{
		$data['title'] = "TPS 3R (TEMPAT PENGELOLAAN SAMPAH REUSE REDUCE RECYCLE)";
		echo view('template/header', $data);
		echo view('content/tps3r');
		echo view('template/navbar');
		echo view('template/footer');
	}

	public function admin()
	{
		echo view('admin/header_admin');
		echo view('admin');
		echo view('admin/footer_admin');
	}
}
