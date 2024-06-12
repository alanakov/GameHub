<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $games[1] = array("id"=>1, "nome"=>"Meowtopia", "descricao"=>"Em Meowtopia, os jogadores assumem o controle de Buggy, enquanto ele se aventura numa missão para encontrar sua amiga desaparecida, Lily. Com gráficos Pixel Art, explore 3 fases desvendando as pistas deixadas para trás, enquanto Buggy mergulha cada vez mais fundo na investigação, com um detetive que parece ter seus próprios segredos.",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"imagens/meowtopiaBanner.jpg","trailer"=>"...");

    $games[2] = array("id"=>2, "nome"=>"CYBERGUN", "descricao"=>"<p>Street Fighter 6 é um jogo eletrônico de luta desenvolvido e publicado pela Capcom. É a sétima entrada principal da franquia Street Fighter, e foi lançado para PlayStation 4, PlayStation 5, Windows e Xbox Series X/S em 2 de junho de 2023, ao passo que uma versão para arcade será publicada pela Taito mais tarde no mesmo ano.</p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"imagens/CYBERGUNBanner.jpg","trailer"=>"...");

    $games[3] = array("id"=>3, "nome"=>"Omega Collapse", "descricao"=>"<p>Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.</p>",
    "poster"=>"{$path}poster_mk1.jpg","banner"=>"imagens/omegaCollapseBanner.jpg","trailer"=>"...");

    $games[4] = array("id"=>4, "nome"=>"Crimson Curse", "descricao"=>"<p>Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.</p>",
    "poster"=>"{$path}poster_fc24.jpg","banner"=>"imagens/crimsonCurseBanner.jpg","trailer"=>"...");

    $games[5] = array("id"=>4, "nome"=>"Crimson Curse", "descricao"=>"<p>Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.</p>",
    "poster"=>"{$path}poster_fc24.jpg","banner"=>"imagens/crimsonCurseBanner.jpg","trailer"=>"...");

    $games[6] = array("id"=>5, "nome"=>"Hollow Knight", "descricao"=>"<p>Hollow Knight é um jogo de ação e aventura em estilo metroidvania 2D que se passa em Hallownest e Deepnest, antigos reinos fictícios. O jogador controla um silencioso receptáculo enquanto explora um mundo subterrâneo. O cavaleiro utiliza uma arma pontiaguda, tanto em combate quanto para interação com o ambiente.</p>","trailer"=>"...");

    $games[7] = array("id"=>6, "nome"=>"Undertale", "descricao"=>"<p>Undertale é um RPG que usa uma perspectiva de cima para baixo. Nele, o jogador controla uma criança e completa objetivos para progredir na história. Ele explora um mundo subterrâneo repleto de cidades e cavernas, e é obrigado a resolver vários quebra-cabeças em sua jornada.</p>",
    "poster"=>"{$path}poster_fc24.jpg","banner"=>"...","trailer"=>"...");

    $games[8] = array("id"=>7, "nome"=>"Cuphead", "descricao"=>"<p>Cuphead apresenta dois jogadores que controlam o personagem-título e seu irmão Mugman, em uma aventura através da fictícia Inkwell Isle para derrotar uma série de chefes para pagar uma dívida adquirida com o diabo. </p>",
    "poster"=>"{$path}poster_fc24.jpg","banner"=>"...","trailer"=>"...");

    $games[9] = array("id"=>8, "nome"=>"Stardew Valley", "descricao"=>"<p>Você herdou a antiga fazenda do seu avô, em Stardew Valley. Com ferramentas de segunda-mão e algumas moedas, você parte para dar início a sua nova vida. Será que você vai aprender a viver da terra, a transformar esse matagal em um próspero lar? Crie a fazenda dos seus sonhos!</p>",
    "poster"=>"{$path}poster_fc24.jpg","banner"=>"imagens/crimsonCurseBanner.jpg","trailer"=>"...");

    echo json_encode($games);