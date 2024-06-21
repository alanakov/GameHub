<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $equipe[1] = array("nome"=>"Gabriel Mastracose","cargo"=>"Desenvolvedor do jogo Flyanp Chicken","foto"=>"imagens/gabrielMastracose.jpeg");
    $equipe[2] = array("nome"=>"Gabriel Menechini","cargo"=>"Desenvolvedor do jogo CYBERGUN","foto"=>"imagens/gabrielMechi.jpeg");
    $equipe[3] = array("nome"=>"Gabriel S. Speciam","cargo"=>"Desenvolvedor do jogo Omega Collapse","foto"=>"imagens/gabrielSpeciam.jpeg");
    $equipe[4] = array("nome"=>"Lucas Brasso","cargo"=>"Desenvolvedor do jogo Crimson Curse / Fisiculturista nas horas vagas","foto"=>"imagens/lucasBrasso.jpg");

    echo json_encode($equipe);