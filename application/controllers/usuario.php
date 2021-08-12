<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Usuario_model', 'usuario');
    }

	public function index()
	{
        $dados['usuarios'] = $this->usuario->listar();
        $this->load->view('Usuario/index', $dados);
	}
}
