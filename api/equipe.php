<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $equipe[1] = array("nome"=>"Alana Kovalski de Angeli","cargo"=>"Desenvolvedor de Games / CEO / Diretora de Arte","foto"=>"imagens/alanaKov.jpg");
    $equipe[2] = array("nome"=>"Gabriel Menechini","cargo"=>"Desenvolvedor de Games","foto"=>"gabrielMechi.jpeg");
    $equipe[3] = array("nome"=>"Gabriel S. Speciam","cargo"=>"Desenvolvedor de Games","foto"=>"{$path}anakin.jpg");
    $equipe[4] = array("nome"=>"Lucas Brasso","cargo"=>"Desenvolvedor de Games / Fisiculturista nas horas vagas","foto"=>"{$path}leia.jpg");

    echo json_encode($equipe);