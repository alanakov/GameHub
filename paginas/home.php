<?php
//file_get_contents funcionar
$arrContextOptions = array(
  "ssl" => array(
    "verify_peer" => false,
    "verify_peer_name" => false,
  ),
);

$urlBanners = "https://localhost/GameHub/api/banners.php";
$dadosApi = file_get_contents($urlBanners, false, stream_context_create($arrContextOptions));
$dadosBannersApi = json_decode($dadosApi);

$urlGamesDestaque1 = "https://localhost/GameHub/api/gamesDestaque1.php";
$dadosApi = file_get_contents($urlGamesDestaque1, false, stream_context_create($arrContextOptions));
$dadosGamesDestaqueApi1 = json_decode($dadosApi);

$urlGamesOutros= "https://localhost/GameHub/api/gamesOutros.php";
$dadosApi = file_get_contents($urlGamesOutros, false, stream_context_create($arrContextOptions));
$dadosGamesOutros = json_decode($dadosApi);

$urlGamesOutros2= "https://localhost/GameHub/api/gamesOutros2.php";
$dadosApi = file_get_contents($urlGamesOutros2, false, stream_context_create($arrContextOptions));
$dadosGamesOutros2 = json_decode($dadosApi);
?>

<div id="carouselExampleIndicators" class="carousel slide pt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <?php
    $primeiroItem = true;
    foreach ($dadosBannersApi as $banners) {
      ?>
      <div class="carousel-item <?php echo $primeiroItem ? 'active' : ''; ?>">
        <img src="<?= $banners->imagem ?>" class="d-block w-100" alt="Banners dos jogos destacados">
      </div>
      <?php
      $primeiroItem = false;
    }
    ?>
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

<div data-aos="fade-up">   <!-- JOGOS EM DESTAQUE -->
  <p class="fs-4 text-white text-center mt-5"><strong>JOGOS EM DESTAQUES</strong></p>

  <div class="m-5 d-flex justify-content-center">
    <a class="text-decoration-none" href="index.php?pg=jogo-meowtopia">
      <div class="card card-game rounded-4" style="background-color: #101010;">
        <p class="bg-danger text-white p-2 m-0 rounded-end-3 position-absolute fs-6 fs-md-1 d-flex float-end">MAIS JOGADOS</p>
        <img src="imagens/meowtopiaBanner.jpg" class="card-img-top rounded-top-4" alt="...">
        <div class="card-body">
          <p class="card-text text-white">Meowtopia</p>
          <p class="card-text" style="color: #707070">Casual • Mistério</p>
        </div>
      </div>
    </a>
  </div>


  <div class="cards container d-md-flex justify-content-center">
    <?php
    foreach ($dadosGamesDestaqueApi1 as $gamesDestaque1) {
      ?>
      <div class="container p-3 d-flex justify-content-center">
        <div class="card card-game rounded-4" style="width: <?= $gamesDestaque1->width ?>; background-color: #101010;">
          <a class="text-decoration-none" href=" <?= $gamesDestaque1->endereco ?>">
            <img src="<?= $gamesDestaque1->banner ?>" class="card-img-top rounded-top-4" alt="...">
            <div class="card-body">
              <p class="card-text text-white"><?= $gamesDestaque1->nome ?> </p>
              <p class="card-text" style="color: #707070"><?= $gamesDestaque1->genero ?></p>
            </div>
        </div>
        </a>
      </div>
      <?php
    }
    ?>
  </div>
</div>                                                                           <!-- FIM JOGOS EM DESTAQUE -->

<div data-aos="fade-up">                                                                            <!-- OUTROS TÍTULOS -->
  <p class="fs-4 text-white text-center mt-5"><strong>EXPLORE MAIS TÍTULOS</strong></p>

  <div class="cards container d-md-flex justify-content-center">
    <?php
    foreach ($dadosGamesOutros as $gamesOutros) {
      ?>
      <div class="container p-3 d-flex justify-content-center">
        <div class="card card-game rounded-4" style="width: <?= $gamesOutros->width ?>; background-color: #101010;">
        <a class="text-decoration-none" href=" <?= $gamesOutros->endereco ?>">
            <img src="<?= $gamesOutros->banner ?>" class="card-img-top rounded-top-4" alt="...">
            <div class="card-body">
              <p class="card-text text-white"><?= $gamesOutros->nome ?> </p>
              <p class="card-text" style="color: #707070"><?= $gamesOutros->genero ?></p>
            </div>
        </div>
        </a>
      </div>
      <?php
    }
    ?>
  </div>
  <div class="cards container d-md-flex justify-content-center">
    <?php
    foreach ($dadosGamesOutros2 as $gamesOutros2) {
      ?>
      <div class="container p-3 d-flex justify-content-center">
        <div class="card card-game rounded-4" style="width: <?= $gamesOutros2->width ?>; background-color: #101010;">
        <a class="text-decoration-none" href=" <?= $gamesOutros2->endereco ?>">
            <img src="<?= $gamesOutros2->banner ?>" class="card-img-top rounded-top-4" alt="...">
            <div class="card-body">
              <p class="card-text text-white"><?= $gamesOutros2->nome ?> </p>
              <p class="card-text" style="color: #707070"><?= $gamesOutros2->genero ?></p>
            </div>
        </div>
        </a>
      </div>
      <?php
    }
    ?>
  </div>
</div>