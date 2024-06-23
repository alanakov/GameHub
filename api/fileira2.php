<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";
    
    $games[4] = array("id"=>4, "nome"=>"CYBERGUN", "descricao"=>"<p>Street Fighter 6 é um jogo eletrônico de luta desenvolvido e publicado pela Capcom. É a sétima entrada principal da franquia Street Fighter, e foi lançado para PlayStation 4, PlayStation 5, Windows e Xbox Series X/S em 2 de junho de 2023, ao passo que uma versão para arcade será publicada pela Taito mais tarde no mesmo ano.</p>",
    "genero"=>"Tiro • Aventura","banner"=>"imagens/CYBERGUN.webp",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-CYBERGUN");

    $games[5] = array("id"=>5, "nome"=>"Flying Chicken", "descricao"=>"<p>Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.</p>",
    "genero"=>"Arcade • Casual","banner"=>"imagens/flyingChicken.webp",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-flyanpChicken");

    $games[6] = array("id"=>6, "nome"=>"Galactic Attack", "descricao"=>"<p>A terra está sob ameaça por membros de outros planetas devido a um conflito galático, proteja a Terra em sua nave XL7 de ataques e derrote o vilão Etron para que ele não destrua a sua casa.</p>",
    "genero"=>"Arcade • Aventura","banner"=>"imagens/galacticAttack.jpeg",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-galacticAttack");


    echo json_encode($games);