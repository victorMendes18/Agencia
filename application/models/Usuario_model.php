<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function listar(){
        return $this->db->get('usuarios')->result();
    }

}