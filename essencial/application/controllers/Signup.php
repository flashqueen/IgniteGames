<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Cadastro - IgniteGames';
		$this->load->view('pages/signup', $data);  
	}

	public function store() {
		
		$this->load->model("users_model");
		$user = array(
			"name" => $_POST["name"],
			"password" => md5($_POST["password"]),
			"email" => $_POST["email"],
			"country" => $_POST["country"],
			"state" => $_POST["state"],
			"city" => $_POST["city"],
			"age" => $_POST["age"],
			
			
		);

		$this->users_model->store($user);
		redirect("login");
	}
}
