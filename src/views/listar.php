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
                for ($i = 1; $i <= 10; $i++) {
                    echo "
                    <tr>
                        <td>{$i}</td>
                        <td>Fulano</td>
                        <td>fulano@email.com</td>
                        <td>85 9 8888-9898</td>
                        <td></td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
</table>