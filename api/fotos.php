<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $fotos[1] = array(
        array("foto"=>"imagens/foto-hollow-grande1.jpeg"),
        array("foto"=>"imagens/foto-hollow-grande2.jpeg"),
        array("foto"=>"imagens/foto-hollow-grande3.jpeg"),
    );

    $fotos[2] = array(
        array("foto"=>"imagens/foto-undertale-grande1"),
        array("foto"=>"imagens/foto-undertale-grande2"),
        array("foto"=>"imagens/foto-undertale-grande3"),
    );

    $fotos[3] = array(
        array("foto"=>"imagens/foto-cuphead-grande1"),
        array("foto"=>"imagens/foto-cuphead-grande1"),
        array("foto"=>"imagens/foto-cuphead-grande3"),
    );

    $fotos[4] = array(
        array("foto"=>"imagens/foto-stardew-grande1"),
        array("foto"=>"imagens/foto-stardew-grande2"),
        array("foto"=>"imagens/foto-stardew-grande3"),
    );

    $fotos[5] = array(
        array("foto"=>"imagens/foto-meowtopia-grande-1.jpeg"),
        array("foto"=>"imagens/foto-meowtopia-grande-2.jpeg"),
        array("foto"=>"imagens/foto-meowtopia-grande-3.jpeg"),
    );

    $fotos[6] = array(
        array("foto"=>"imagens/foto-stardew-grande1"),
        array("foto"=>"imagens/foto-stardew-grande2"),
        array("foto"=>"imagens/foto-stardew-grande3"),
    );
    
    $fotos[7] = array(
        array("foto"=>"imagens/foto-stardew-grande1"),
        array("foto"=>"imagens/foto-stardew-grande2"),
        array("foto"=>"imagens/foto-stardew-grande3"),
    );

    $fotos[8] = array(
        array("foto"=>"imagens/foto-stardew-grande1"),
        array("foto"=>"imagens/foto-stardew-grande2"),
        array("foto"=>"imagens/foto-stardew-grande3"),
    );

    $fotos[9] = array(
        array("foto"=>"imagens/foto-stardew-grande1"),
        array("foto"=>"imagens/foto-stardew-grande2"),
        array("foto"=>"imagens/foto-stardew-grande3"),
    );

    $fotos[10] = array(
        array("foto"=>"imagens/foto-stardew-grande1"),
        array("foto"=>"imagens/foto-stardew-grande2"),
        array("foto"=>"imagens/foto-stardew-grande3"),
    );


    echo json_encode($fotos);