<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $banners[0] = array("nome"=>"Meowtopia","imagem"=>"imagens/meowtopiaBanner.jpg","id_game"=>1);
    $banners[1] = array("nome"=>"Crimson Curse","imagem"=>"imagens/crimsonCurseBanner.jpg","id_game"=>2);
    $banners[2] = array("nome"=>"Omega Collapse","imagem"=>"imagens/omegaCollapseBanner.jpg","id_game"=>3);

    echo json_encode($banners);