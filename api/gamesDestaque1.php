<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";
    
    $games[2] = array("id"=>2, "nome"=>"CYBERGUN", "descricao"=>"<p>Street Fighter 6 é um jogo eletrônico de luta desenvolvido e publicado pela Capcom. É a sétima entrada principal da franquia Street Fighter, e foi lançado para PlayStation 4, PlayStation 5, Windows e Xbox Series X/S em 2 de junho de 2023, ao passo que uma versão para arcade será publicada pela Taito mais tarde no mesmo ano.</p>",
    "genero"=>"Tiro • Aventura","banner"=>"imagens/CYBERGUN.webp",
    "width" => "18rem");

    $games[3] = array("id"=>3, "nome"=>"Flyanp Chicken", "descricao"=>"<p>Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.</p>",
    "genero"=>"Aventura • Terror","banner"=>"imagens/flyanpChicken.webp",
    "width" => "18rem");

    $games[4] = array("id"=>4, "nome"=>"Crimson Curse", "descricao"=>"<p>Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.</p>",
    "genero"=>"Aventura • Mistério","banner"=>"imagens/crimsonCurse.webp",
    "width" => "18rem");

    //$games[5] = array("id"=>4, "nome"=>"Flyanp Chicken", "descricao"=>"<p>Cluckina é uma galinha corajosa e determinada que escapou do confinamento da fazenda em
    //busca de liberdade. Com penas brancas e olhos vivos, ela enfrenta o desafio de voar pelo
    //campo aberto enquanto é perseguida por gaviões famintos.</p>",
    //"genero"=>"Casual • Arcade","banner"=>"imagens/flyanpChicken.webp",
    //"width" => "18rem");


    echo json_encode($games);