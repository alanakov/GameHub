<?php
//file_get_contents funcionar
$arrContextOptions = array(
  "ssl" => array(
    "verify_peer" => false,
    "verify_peer_name" => false,
  ),
);

$urlBanners = "https://localhost/Project2/api/banners.php";
$dadosApi = file_get_contents($urlBanners, false, stream_context_create($arrContextOptions));
$dadosBannersApi = json_decode($dadosApi);

$urlGamesDestaque1 = "https://localhost/Project2/api/gamesDestaque1.php";
$dadosApi = file_get_contents($urlGamesDestaque1, false, stream_context_create($arrContextOptions));
$dadosGamesDestaqueApi1 = json_decode($dadosApi);

$urlGamesPromocao= "https://localhost/Project2/api/gamesPromocao.php";
$dadosApi = file_get_contents($urlGamesPromocao, false, stream_context_create($arrContextOptions));
$dadosGamesPromocao = json_decode($dadosApi);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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

<div> <!-- JOGOS EM DESTAQUE -->
  <p class="fs-4 text-white mt-5 ms-5"><strong>JOGOS EM DESTAQUES</strong></p>

  <div class=" m-5 d-flex justify-content-center">
    <a class="text-decoration-none" href="">
      <div class="card rounded-4" style="width: 64rem; background-color: #101010;">
        <p class="bg-danger text-white p-2 m-0 rounded-end-3 position-absolute d-flex float-end">MAIS JOGADOS</p>
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
        <div class="card rounded-4" style="width: <?= $gamesDestaque1->width ?>; background-color: #101010;">
          <a class="text-decoration-none" href="">
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
</div> <!-- FIM JOGOS EM DESTAQUE -->

<div> <!-- JOGOS EM PROMOÇÃO -->
  <p class="fs-4 text-white mt-5 ms-5"><strong>JOGOS EM PROMOÇÃO</strong></p>

  <div class="cards container d-md-flex justify-content-center">
    <?php
    foreach ($dadosGamesPromocao as $gamesPromocao) {
      ?>
      <div class="container p-3 d-flex justify-content-center">
        <div class="card rounded-4" style="width: <?= $gamesPromocao->width ?>; background-color: #101010;">
          <a class="text-decoration-none" href="">
            <p class="bg-danger text-white p-2 m-0 rounded-end-3 position-absolute d-flex float-end"><?= $gamesPromocao->desconto?></p>
            <img src="<?= $gamesPromocao->banner ?>" class="card-img-top rounded-top-4" alt="...">
            <div class="card-body">
              <p class="card-text text-white"><?= $gamesPromocao->nome ?> </p>
              <p class="card-text" style="color: #707070"><?= $gamesPromocao->genero ?></p>
            </div>
        </div>
        </a>
      </div>
      <?php
    }
    ?>
  </div>
</div>