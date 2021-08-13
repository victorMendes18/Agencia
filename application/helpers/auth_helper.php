<?php

function autenticacao(){
    $ci = get_instance();
    $usuarioLogado = $ci->session->userdata('alunoLogado');

    if (!$usuarioLogado){
        $ci->session->set_flashdata("danger", "Usuário necessita estar logado para acessar esta página!");
        redirect("login");
    }
    return $usuarioLogado;
}