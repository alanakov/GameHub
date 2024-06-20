<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";
    
    $games[4] = array("id"=>2, "nome"=>"Galactic Attack", "descricao"=>"<p>A terra está sob ameaça por membros de outros planetas devido a um conflito galático, proteja a Terra em sua nave XL7 de ataques e derrote o vilão Etron para que ele não destrua a sua casa.</p>",
    "genero"=>"Tiro • Aventura","banner"=>"imagens/galacticAttack.jpeg",
    "width" => "18rem");

    $games[5] = array("id"=>3, "nome"=>"Snake Hungry", "descricao"=>"<p>O clássio jogo SNAKE, onde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rápido, dando uma dinâmica única, sensacional e muito clássica.</p>",
    "genero"=>"Aventura • Terror","banner"=>"imagens/snakeHungry.jpeg",
    "width" => "18rem");

    $games[6] = array("id"=>4, "nome"=>"A Arte da Ocultação", "descricao"=>"<p>você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado.</p>",
    "genero"=>"Aventura • Mistério","banner"=>"imagens/aArteDaOcultacao.jpeg",
    "width" => "18rem");


    echo json_encode($games);