<?php

include '../config/routes.php';


function view(string $name, array $dados = []): void {


    include '../src/views/_template/head.php';
    include "../src/views/{$name}.php";
    include '../src/views/_template/footer.php';
}