<?php
//file_get_contents funcionar
$arrContextOptions = array(
    "ssl" => array(
      "verify_peer" => false,
      "verify_peer_name" => false,
    ),
  );
  

$urlEquipe = "https://localhost/GameHub/api/equipe.php";
$dadosApi = file_get_contents($urlEquipe, false, stream_context_create($arrContextOptions));
$dadosEquipeApi = json_decode($dadosApi);
?>

<p class="text-white text-center mt-5 fs-3 fw-bold" style="margin-top: 70px">CONHEÇA NOSSA EQUIPE!</p>

<div data-aos="fade-up" class=" m-5 d-flex justify-content-center">
      <div class="card rounded-4" style="width: 20rem; background-color: #101010;">
        <p class="bg-danger text-white p-2 m-0 rounded-end-3 position-absolute d-flex float-end">CEO</p>
        <img src="imagens/alanaKov.jpg" class="card-img-top rounded-top-4" alt="Alana Kovalski">
        <div class="card-body">
          <p class="card-text text-white">Alana Kovalski de Angeli</p>
          <p class="card-text" style="color: #707070">CEO • Desenvolvedora do jogo Meowtopia</p>
        </div>
      </div>
  </div>

<div data-aos="fade-up" class="cards container d-md-flex justify-content-center">
    <?php
    foreach ($dadosEquipeApi as $equipe) {
      ?>
      <div class="container p-3 d-flex justify-content-center">
        <div class="card rounded-4" style="width: <?= $equipe->width ?>; background-color: #101010;">
            <img src="<?= $equipe->foto ?>" class="card-img-top rounded-top-4" alt="...">
            <div class="card-body">
              <p class="card-text text-white"><?= $equipe->nome ?> </p>
              <p class="card-text" style="color: #707070"><?= $equipe->cargo ?></p>
            </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>