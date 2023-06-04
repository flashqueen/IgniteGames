<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		permission();
		$this->load->model("games_model");
		$this->load->model("users_model");
	}

	public function index(){
		$dados["games"]  = $this->games_model->dashboard_index();
		$dados["users"]  = $this->users_model->dashboard_index();
		$data['title'] = 'Dashboard - IgniteGames';

		// print "<pre>";
		// print_r($_SESSION);
		// print "</pre>";
		// exit();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/dashboard', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function pesquisar(){
		$this->load->model("busca_model");
		$data['title'] = "Resultado da pesquisa por *". $_POST["busca"] ."*";
		$data["result"] = $this->busca_model->buscar($_POST);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/resultado', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}
