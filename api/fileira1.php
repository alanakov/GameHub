<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";
    
    $games[1] = array("id"=>1, "nome"=>"A Arte da Ocultação", "descricao"=>"<p>Você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado.</p>",
    "genero"=>"Aventura • Ação","banner"=>"imagens/aArteDaOcultacao.jpeg",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-aArteDaOcultacao");

    $games[2] = array("id"=>2, "nome"=>"Crimson Curse", "descricao"=>"<p>Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.</p>",
    "genero"=>"Aventura • Mistério","banner"=>"imagens/crimsonCurse.webp",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-crimsonCurse");

    $games[3] = array("id"=>3, "nome"=>"Cuphead", "descricao"=>"<p>Street Fighter 6 é um jogo eletrônico de luta desenvolvido e publicado pela Capcom. É a sétima entrada principal da franquia Street Fighter, e foi lançado para PlayStation 4, PlayStation 5, Windows e Xbox Series X/S em 2 de junho de 2023, ao passo que uma versão para arcade será publicada pela Taito mais tarde no mesmo ano.</p>",
    "genero"=>"Plataforma • Tiro","banner"=>"imagens/cuphead.png",
    "width" => "18rem",
    "endereco" => "index.php?pg=jogo-cuphead");


    echo json_encode($games);