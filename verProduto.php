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
    <title>Detalhe do Produto</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Detalhes do Produto
                            <a href="app.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                         <?php
                            if(isset($_GET['id']))
                            {
                                $idproduto =mysqli_real_escape_string($con, $_GET['id']);
                                $requisicao = "SELECT * FROM produto WHERE id = '$idproduto'";
                                $query_run = mysqli_query($con,$requisicao);
                                if(mysqli_num_rows($query_run)>0)
                                 {
                                     $produto = mysqli_fetch_array ($query_run);
                            ?>
                                <div class="mb-3">
                                    <label for="">Produto</label>
                                    <p class="form-control">
                                        <?= $produto['nomeproduto'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="">Quantidade</label>
                                    <p class="form-control">
                                        <?= $produto['quantidade'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="">Unidade</label>
                                    <p class="form-control">
                                        <?= $produto['unidade'];?>
                                    </p>
                                </div>
                                
                                <?php

                                 }
                            }
                            else{
                                echo "Nenhum Produto Cadastrado";
                            }
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>