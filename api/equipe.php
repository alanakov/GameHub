<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $equipe[1] = array("nome"=>"ai nao sei o que","cargo"=>"Desenvolvedor de Games","foto"=>"imagens/gabrielMechi.jpeg");
    $equipe[2] = array("nome"=>"Gabriel Menechini","cargo"=>"Desenvolvedor de Games","foto"=>"imagens/gabrielMechi.jpeg");
    $equipe[3] = array("nome"=>"Gabriel S. Speciam","cargo"=>"Desenvolvedor de Games","foto"=>"imagens/gabrielMechi.jpeg");
    $equipe[4] = array("nome"=>"Lucas Brasso","cargo"=>"Desenvolvedor de Games / Fisiculturista nas horas vagas","foto"=>"imagens/gabrielMechi.jpeg");

    echo json_encode($equipe);