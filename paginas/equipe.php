

$urlBanners = "https://localhost/Project2/api/banners.php";
$dadosApi = file_get_contents($urlBanners, false, stream_context_create($arrContextOptions));
$dadosBannersApi = json_decode($dadosApi);
