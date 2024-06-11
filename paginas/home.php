<?php 
//file_get_contents funcionar
$arrContextOptions=array(
  "ssl"=>array(
      "verify_peer"=>false,
      "verify_peer_name"=>false,
  ),
);  

$url = "https://localhost/Project2/api/games.php";
$dadosApi = file_get_contents($url, false, stream_context_create($arrContextOptions));
$dadosGamesApi = json_decode($dadosApi);
?>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <?php
    foreach($dadosGamesApi as $games) {
      ?>
      <div class="carousel-item active">
      <img src="<?=$games->banner ?>" class="d-block w-100" alt="...">
      </div>
      <?php
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