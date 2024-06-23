<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";
    
    $games[7] = array("id"=>7, "nome"=>"Hollow Knight", "descricao"=>"<p>Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.</p>",
    "genero"=>"Aventura • Ação","banner"=>"imagens/hollowKnight.jpg",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-hollowKnight");

    $games[8] = array("id"=>8, "nome"=>"Meowtopia", "descricao"=>"Em Meowtopia, os jogadores assumem o controle de Buggy, enquanto ele se aventura numa missão para encontrar sua amiga desaparecida, Lily. Com gráficos Pixel Art, explore 3 fases desvendando as pistas deixadas para trás, enquanto Buggy mergulha cada vez mais fundo na investigação, com um detetive que parece ter seus próprios segredos.",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"imagens/meowtopia.jpg",
    "genero"=>"Casual • Mistério",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-meowtopia");

    $games[9] = array("id"=>9, "nome"=>"Omega Collapse", "descricao"=>"<p>Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.</p>",
    "poster"=>"{$path}poster_mk1.jpg","banner"=>"imagens/omegaCollapse.webp",
    "genero"=>"Aventura • Ação",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-omegaCollapse");


    echo json_encode($games);