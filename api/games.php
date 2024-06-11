<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $games[1] = array("id"=>1, "nome"=>"Mewotopia", "descricao"=>"Em Meowtopia, os jogadores assumem o controle de Buggy, enquanto ele se aventura numa missão para encontrar sua amiga desaparecida, Lily. Com gráficos Pixel Art, explore 3 fases desvendando as pistas deixadas para trás, enquanto Buggy mergulha cada vez mais fundo na investigação, com um detetive que parece ter seus próprios segredos.",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg","trailer"=>"https://www.youtube.com/embed/M9FGaan35s0");

    $games[2] = array("id"=>2, "nome"=>"CYBERGUN", "descricao"=>"<p>Street Fighter 6 é um jogo eletrônico de luta desenvolvido e publicado pela Capcom. É a sétima entrada principal da franquia Street Fighter, e foi lançado para PlayStation 4, PlayStation 5, Windows e Xbox Series X/S em 2 de junho de 2023, ao passo que uma versão para arcade será publicada pela Taito mais tarde no mesmo ano.</p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg","trailer"=>"https://www.youtube.com/embed/3sAU1fPK0K4");

    $games[3] = array("id"=>3, "nome"=>"Omega Collapse", "descricao"=>"<p>Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.</p>",
    "poster"=>"{$path}poster_mk1.jpg","banner"=>"{$path}mk1.jpg","trailer"=>"https://www.youtube.com/embed/Ue1Yo-3QnRc");

    $games[4] = array("id"=>4, "nome"=>"Crimson Curse", "descricao"=>"<p>Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.</p>",
    "poster"=>"{$path}poster_fc24.jpg","banner"=>"{$path}fc24.jpg","trailer"=>"https://www.youtube.com/embed/XhP3Xh4LMA8");

    echo json_encode($games);