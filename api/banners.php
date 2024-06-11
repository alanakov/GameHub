<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $banners[0] = array("nome"=>"Meowtopia","imagem"=>"{$path}meowtopia.jpg","id_game"=>1);
    $banners[1] = array("nome"=>"CYBERGUN","imagem"=>"{$path}CYBERGUNBanner.jpg","id_game"=>2);
    $banners[2] = array("nome"=>"Omega Collapse","imagem"=>"{$path}omegaCollapseBanner.jpg","id_game"=>3);
    $banners[3] = array("nome"=>"Crimson Curse","imagem"=>"{$path}crimsonCurseBanner.jpg","id_game"=>4);

    echo json_encode($banners);