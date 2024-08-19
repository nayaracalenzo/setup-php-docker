<section class="row">
     <div class="col">
        <div class="card card-body">
            <div id="erros"> 
            </div>
            <div>
                <h3>Editar Contato</h3>
            </div>
            <?php
            $conexao = include '../src/conexao.php';
            $id = $_GET['id'];
            $dados = $conexao->query("SELECT * FROM tb_contatos WHERE id='{$id}'");
            $contato = $dados->fetchObject();
            ?>
            <form action="" method="post">
                <label for="">Nome</label>
                <input value="<?=$contato->nome;?>" id="input_nome" type="text" name="nome" class="form-control mb-3">

                <label for="">Email</label>
                <input value="<?=$contato->email;?>"type="text" name="email" class="form-control mb-3">

                <label for="">Telefone</label>
                <input value="<?=$contato->telefone;?>"type="text" name="telefone" class="form-control mb-3">

                <button id="btn_enviar" class="btn btn-dark w-100">Pronto</button>
            </form>
        </div>
</div>
<div class="col">
</div>
</section>