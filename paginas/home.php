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

<div id="carouselExampleIndicators" class="carousel slide">
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
      <img src="<?= $banners->imagem ?>" class="d-block w-100" alt="...">
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