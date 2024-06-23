<?php
//file_get_contents funcionar
$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);


$urlFileira1 = "https://localhost/GameHub/api/fileira1.php";
$dadosApi = file_get_contents($urlFileira1, false, stream_context_create($arrContextOptions));
$dadosFileira1 = json_decode($dadosApi);

$urlFileira2 = "https://localhost/GameHub/api/fileira2.php";
$dadosApi = file_get_contents($urlFileira2, false, stream_context_create($arrContextOptions));
$dadosFileira2 = json_decode($dadosApi);

$urlFileira3 = "https://localhost/GameHub/api/fileira3.php";
$dadosApi = file_get_contents($urlFileira3, false, stream_context_create($arrContextOptions));
$dadosFileira3 = json_decode($dadosApi);

$urlFileira4 = "https://localhost/GameHub/api/fileira4.php";
$dadosApi = file_get_contents($urlFileira4, false, stream_context_create($arrContextOptions));
$dadosFileira4 = json_decode($dadosApi);

?>
<p class="text-white text-center mt-5 fs-3 fw-bold" style="padding-top: 80px; z-index: 1">TODOS OS JOGOS</p>
<div class="cards container d-md-flex justify-content-center" data-aos="fade-up">
    <?php
    foreach ($dadosFileira1 as $fileira1) {
        ?>
        <div class="container p-3 d-flex justify-content-center">
            <div class="card card-game rounded-4" style="width: <?= $fileira1->width ?>; background-color: #101010;">
                <a class="text-decoration-none" href=" <?= $fileira1->endereco ?>">
                    <img src="<?= $fileira1->banner ?>" class="card-img-top rounded-top-4" alt="...">
                    <div class="card-body">
                        <p class="card-text text-white"><?= $fileira1->nome ?> </p>
                        <p class="card-text" style="color: #707070"><?= $fileira1->genero ?></p>
                    </div>
            </div>
            </a>
        </div>
        <?php
    }
    ?>
</div>

<div class="cards container d-md-flex justify-content-center" data-aos="fade-up">
    <?php
    foreach ($dadosFileira2 as $fileira2) {
        ?>
        <div class="container p-3 d-flex justify-content-center">
            <div class="card card-game rounded-4" style="width: <?= $fileira2->width ?>; background-color: #101010;">
                <a class="text-decoration-none" href=" <?= $fileira2->endereco ?>">
                    <img src="<?= $fileira2->banner ?>" class="card-img-top rounded-top-4" alt="...">
                    <div class="card-body">
                        <p class="card-text text-white"><?= $fileira2->nome ?> </p>
                        <p class="card-text" style="color: #707070"><?= $fileira2->genero ?></p>
                    </div>
            </div>
            </a>
        </div>
        <?php
    }
    ?>
</div>

<div class="cards container d-md-flex justify-content-center" data-aos="fade-up">
    <?php
    foreach ($dadosFileira3 as $fileira3) {
        ?>
        <div class="container p-3 d-flex justify-content-center">
            <div class="card card-game rounded-4" style="width: <?= $fileira3->width ?>; background-color: #101010;">
                <a class="text-decoration-none" href=" <?= $fileira3->endereco ?>">
                    <img src="<?= $fileira3->banner ?>" class="card-img-top rounded-top-4" alt="...">
                    <div class="card-body">
                        <p class="card-text text-white"><?= $fileira3->nome ?> </p>
                        <p class="card-text" style="color: #707070"><?= $fileira3->genero ?></p>
                    </div>
            </div>
            </a>
        </div>
        <?php
    }
    ?>
</div>

<div class="cards container d-md-flex justify-content-center" data-aos="fade-up">
    <?php
    foreach ($dadosFileira4 as $fileira4) {
        ?>
        <div class="container p-3 d-flex justify-content-center">
            <div class="card card-game rounded-4" style="width: <?= $fileira4->width ?>; background-color: #101010;">
                <a class="text-decoration-none" href=" <?= $fileira4->endereco ?>">
                    <img src="<?= $fileira4->banner ?>" class="card-img-top rounded-top-4" alt="...">
                    <div class="card-body">
                        <p class="card-text text-white"><?= $fileira4->nome ?> </p>
                        <p class="card-text" style="color: #707070"><?= $fileira4->genero ?></p>
                    </div>
            </div>
            </a>
        </div>
        <?php
    }
    ?>
</div>