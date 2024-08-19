<table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                // echo count($resultado->fetchAll());

                 foreach ($dados as $cada) {
                    $id = $cada['id'];
                    echo "
                    
                    <tr>
                        <td>{$id}</td>
                        <td>{$cada['nome']}</td
                        <td>{$cada['email']}</td>
                        <td>{$cada['telefone']}</td>
                        <td>
                            <a href='contatos/editar?id={$id}'>Editar</a>
                            <a href='contatos/excluir?id={$id}' onClick='excluir({$id})'>Excluir</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
</table>
<script>
    function excluir (id) {
        let resposta = confirm('Você tem certeza?')
        
        if (resposta === true) {
            location.href = 'contatos/excluir?id='+id;
        } 
        
    }
</script>