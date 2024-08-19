<?php 

declare(strict_types=1);

function contatos_listar(): void {
    $conexao = require_once '..src/conexao.php';

    $dados= $conexao->query('SELECT * FROM tb_contatos;');

    view('listar', $dados->fetchAll());
}

function contatos_add(): void {
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        
        $data = date('d/m/Y');

      $conexao = require_once '../src/conexao.php';
    
      $conexao->query("
        INSERT INTO tb_contatos (nome, email, telefone, data_cadastro)
        VALUES ('{$nome}', '{$email}','{$telefone}', '{$data}')
      ");

       header('location: /listar'); 
    }
       view('cadastro');
}

function contatos_excluir(): void {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_contatos WHERE id='{$id}'";

    $conexao = include '../src/conexao.php';
    $conexao->query($sql);

    header('location: /listar'); 
}

function contatos_editar(): void {
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $id = $_GET['id'];
        $sql = "UPDATE tb_contatos SET nome='{$nome}', telefone='{$telefone}' WHERE id='{$id}'";

        $conexao = include '../src/conexao.php';
        $id=$_GET['id'];
        $dados= $conexao->query("SELECT * FROM tb_contatos WHERE id='{$id}'");

        header('location: contatos/listar'); 
    }
    view('/editar');
}