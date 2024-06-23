<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/logoGameHubBranca.png">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/6578787cbc.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg w-100" data-bs-theme="dark" style="position: fixed; z-index: 200; ">
            <div class="container-fluid">
                <a class="navbar-brand d-flex" href="index.php?pg=home">
                    <img src="imagens/logoGameHubVerm.png" style="width: 65px;" alt="">
                    <p class="d-none d-md-block" style="color: #DB3A34;">Game</p>
                    <p class="d-none d-md-block text-white">Hub</p>
                </a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0 text-center" id="navbarNav">
                    <ul class="navbar-nav position-relative">
                        <li class=" nav-item">
                        <a class="nav-link" href="index.php?pg=home">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pg=equipe">EQUIPE</a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa-solid fa-message"></i>
                                CONTATO
                            </button>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-bs-theme="dark">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">ENTRE EM CONTATO!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form" action="https://formsubmit.co/alana.angeli@grupointegrado.br" method="POST">
                    <input type="hidden" name="_next" value="https://seusite.com/obrigado.html">
                    <input type="hidden" name="_captcha" value="false">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="full-name" class="col-form-label text-white">Nome completo:</label>
                            <input type="text" class="form-control required" id="full-name"
                                placeholder="&#xf007 Digite seu nome" style="font-family: 'Poppins','FontAwesome'"
                                oninput="nameValidate()">
                            <span class="span-required text-danger"
                                style="display: none; font-size: 16px; margin-top: 1.5%">Nome deve ter no mínimo 3
                                caracteres</span>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label text-white">E-mail:</label>
                            <input type="email" class="form-control required" id="email"
                                placeholder="&#xf0e0 exemplo@exem.com" style="font-family: 'Poppins','FontAwesome'"
                                oninput="emailValidate()">
                            <span class="span-required text-danger"
                                style="display: none; font-size: 16px; margin-top: 1.5%">Digite um e-mail válido</span>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label text-white">Mensagem:</label>
                            <textarea class="form-control required" id="message-text"></textarea>
                            <span class="span-required"
                                style="display: none; font-size: 16px; margin-top: 1.5%; color: #979797">Digite a
                                mensagem que deseja enviar</span>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                        <button type="submit" value="Enviar" class="btn btn-danger button"
                            onclick="messageSent()">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <main>

        <?php

        $pg = $_GET["pg"] ?? "home";
        $pg = "paginas/$pg.php";

        if (file_exists($pg)) {
            include $pg;
        } else {
            echo "nao foi dessa  vez bb";
        }









        //URL
        /* if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina == "jogo/{$jogo}.php";
        } else {
            $pagina = "paginas/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }

        //API
        $url = "" */
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <footer>
        <div class="footer text-center p-3 mt-5">
            <a href="#">
                <img src="imagens/LogoGameHubBranca.png" alt="GameHub">
            </a>
            <h4 class="fs-6 text-white p-2">Alana Kovalski de Angeli ©</h4>
        </div>
    </footer>
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        nameValidate();
        emailValidate();
    });

    function setError(index) {
        campos[index].style.border = '1px solid #e63636';
        spans[index].style.display = 'block';
    }

    function messageSuccess(index) {
        spans[index].style.display = 'block';
    }

    function removeError(index) {
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }


    function nameValidate() {
        if (campos[0].value.length < 3) {
            setError(0);
        } else {
            removeError(0);
        }
    }

    function emailValidate() {
        if (!emailRegex.test(campos[1].value)) {
            setError(1);
        } else {
            removeError(1);
        }
    }

    function messageSent() {
        messageSuccess();
    }


    //document.getElementById('form').addEventListener('submit', function(event) {
    // Verifique se há erros de validação aqui
    //const nameValid = nameValidate();
    //const emailValid = emailValidate();

    // if (!nameValid || !emailValid || !messageValid) {
    // event.preventDefault(); // Impede o envio do formulário se houver erros
    // }
    //});
</script>

</html>