<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Usuario_model', 'usuario');
    }

    public function index(){
        $this->load->view('Login/index');
    }

    public function store(){
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        $login = $this->usuario->login($email, $senha);

        if ($login){
            //Salva o usuário logado
            $this->session->set_userdata($login);
            redirect(base_url());
        }else{
            $dados['erro'] = "Email ou senha incorreta.";
            $this->load->view('Login/index', $dados);
        }
    }
}