<?php 
//file_get_contents funcionar
$arrContextOptions=array(
  "ssl"=>array(
      "verify_peer"=>false,
      "verify_peer_name"=>false,
  ),
);  

$url = "https://localhost/Project2/api/banners.php";
$dadosApi = file_get_contents($url, false, stream_context_create($arrContextOptions));
$dadosBannersApi = json_decode($dadosApi);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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

<div>                                                                                <!-- JOGOS EM DESTAQUE -->
  <p class="fs-4 text-white mt-5 ms-3"><strong>JOGOS EM DESTAQUES</strong></p>

  <div class="container">
    <div class="card" style="width: 18rem; background-color: #101010;">
      <img src="imagens/meowtopia.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-white">Meowtopia</p>
        <p class="card-text" style="color: #7C7C7C;">Mistério • Aventura</p>
      </div>
    </div>
  </div>
</div>                                                                               <!-- FIM JOGOS EM DESTAQUE -->

<div>                                                                                <!-- JOGOS EM PROMOÇÃO -->
  <p class="fs-4 text-white mt-5 ms-3"><strong>JOGOS EM PROMOÇÃO</strong></p>        
</div>       