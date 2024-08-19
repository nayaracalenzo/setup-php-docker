<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
  
</head>
<body class='container'>
    <h1 class='mt-3'> Contatinhos</h1>
    <hr> 
    <nav>
        <?php
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        ?>

        <a class="<?php echo $url === '/contatos/listar'?'btn-dark' : 'btn btn-outline-dark'?>" href='/contatos/listar'>Listar Contatos</a>
        <a class="<?php echo $url === '/contatos/adicionar'?'btn-dark' : 'btn btn-outline-dark'?>" href='/contatos/adicionar'>Cadastrar Contatos</a>
        <a class="<?php echo $url === '/lugares/listar'?'btn-dark' : 'btn btn-outline-dark'?>" href='/lugares/listar'>Cadastrar Lugares</a>
        <a class="<?php echo $url === '/lugares/adicionar'?'btn-dark' : 'btn btn-outline-dark'?>" href='/lugares/adicionar'>Cadastrar Lugares</a>
    </nav>
</hr>
