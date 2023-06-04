<?php

function permission() {
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");

    if(!$loggedUser){
        $ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página!");
        redirect("login");
    }
    return $loggedUser;
}

function userPermission() {
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");

    if($loggedUser["roles"] == 0){
        $ci->session->set_flashdata("danger", "Você precisa ter privilégios de administrador para acessar esta página!");
        redirect("dashboard");
    }
    return $loggedUser;
}