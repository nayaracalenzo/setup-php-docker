<?php


$url = $_SERVER['REQUEST_URI'];

if ($url === '/listar') {
    view('listar');
} else if ($url === '/cadastro') {
    var_dump($_POST);
    view('cadastro');
} else {
    echo 'Pagina não encontrada';
}

function view(string $name): void {
    include '../src/views/_template/head.php';
    include "../src/views/{$name}.php";
    include '../src/views/_template/footer.php';
}