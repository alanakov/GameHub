<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";
    
    $games[10] = array("id"=>10, "nome"=>"Snake Hungry", "descricao"=>"<p>O clássio jogo SNAKE, onde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rápido, dando uma dinâmica única, sensacional e muito clássica.</p>",
    "genero"=>"Arcade • Casual","banner"=>"imagens/snakeHungry.jpeg",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-snakeHungry");

    $games[11] = array("id"=>11, "nome"=>"Stardew Valley", "descricao"=>"<p>Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.</p>",
    "genero"=>"RPG de vida de fazenda","banner"=>"imagens/stardewValley.webp",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-stardewValley");

    echo json_encode($games);