<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Produtos</title>
</head>

<body>
    <?php require_once "barra_navegacao.php"; ?>

    <div class="container">
        <h1>Produtos</h1>
        <?php
        if (isset($resposta)) {
            if ($resposta) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Registro inserido com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Erro ao inserir o registro!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            }
        }
        ?>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <th scope="row"><?= $linha['id'] ?></th>
                        <td><?= $linha['nome'] ?></td>
                        <td><?= $linha['descricao'] ?></td>
                        <td><?= $linha['valor'] ?></td>
                        <td>
                            <a href="/produto/alterar/<?= $linha['id'] ?>" class="btn btn-warning">Alterar</a>
                            <a href="/produto/excluir/<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>