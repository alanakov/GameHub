<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $fotos[6] = array(
        array("foto"=>"imagens/foto-hollow-grande1"),
        array("foto"=>"imagens/foto-hollow-grande2"),
        array("foto"=>"imagens/foto-hollow-grande3"),
    );

    $fotos[7] = array(
        array("foto"=>"imagens/foto-undertale-grande1"),
        array("foto"=>"imagens/foto-undertale-grande2"),
        array("foto"=>"imagens/foto-undertale-grande3"),
    );

    $fotos[8] = array(
        array("foto"=>"imagens/foto-cuphead-grande1"),
        array("foto"=>"imagens/foto-cuphead-grande1"),
        array("foto"=>"imagens/foto-cuphead-grande3"),
    );

    $fotos[9] = array(
        array("foto"=>"imagens/foto-stardew-grande1"),
        array("foto"=>"imagens/foto-stardew-grande2"),
        array("foto"=>"imagens/foto-stardew-grande3"),
    );


    echo json_encode($fotos);