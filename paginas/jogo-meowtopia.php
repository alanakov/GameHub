<?php
//file_get_contents funcionar
$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);

$urlFotos = "https://localhost/GameHub/api/fotos.php";
$dadosApi = file_get_contents($urlFotos, false, stream_context_create($arrContextOptions));
$dadosFotosApi = json_decode($dadosApi);
?>

<img class="w-100" src="imagens/meowtopiaBanner.jpg" alt="Meowtopia">

<div class="d-xl-flex flex-xl-row">
    <div class="d-flex flex-column m-5 gap-3">
        <div class="d-flex">
            <h2 class="text-white"><strong>Meowtopia</strong></h2>
            <div class="m-2 d-flex">
                <i class="fa-solid fa-star text-white fs-5"></i>
                <i class="fa-solid fa-star text-white fs-5"></i>
                <i class="fa-solid fa-star text-white fs-5"></i>
                <i class="fa-solid fa-star text-white fs-5"></i>
                <i class="fa-solid fa-star text-white fs-5"></i>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide container">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/foto-meowtopia-grande-1.jpeg" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagens/foto-meowtopia-grande-2.jpeg" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagens/foto-meowtopia-grande-3.jpeg" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="d-flex mt-5">
        <div class="m-5">
            <p class="text-white fs-3 fw-semibold">Descrição</p>
            <p class="text-white">Em Meowtopia, os jogadores assumem o controle de Buggy, enquanto ele se aventura numa
                missão para encontrar sua amiga desaparecida, Lily. Com gráficos Pixel Art, explore 3 fases desvendando
                as pistas deixadas para trás, enquanto Buggy mergulha cada vez mais fundo na investigação, com um
                detetive que parece ter seus próprios segredos.</p>


            <div class="mt-xl-5 d-none d-md-block">
                <a href="#" class="btn bg-danger text-white fs-6 fw-semibold px-5 p-2 d-flex justify-content-center" style="margin-top: 42%">JOGAR AGORA</a>
            </div>
            <div class="d-md-none d-block mt-5 text-center text-danger">
                <p>O JOGO ESTÁ DISPONÍVEL SOMENTE PARA COMPUTADORES</p>
            </div>
        </div>
    </div>


</div>