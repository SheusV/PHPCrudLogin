<?php
    session_start();
    require 'conex.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Criar Produtos</title>
</head>
<body>
    <div class="container mt-5">
    <?php include 'msg.php';?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Adicionar Produto
                            <a href="app.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="codes.php" method="POST">
                            <div class="mb-3">
                                <label for="">Produto</label>
                                <input type="text"name="nomeproduto"class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Quantidade</label>
                                <input type="text"name="quantidade"class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Unidade</label>
                                <input type="text"name="unidade"class="form-control" required>
                            </div>
                                      
                            <div class="mb-3">
                                <button type="submit"name="salvarProduto" class="btn btn-primary float-end">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>