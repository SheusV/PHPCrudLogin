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
    <title>Editar Produtos</title>
</head>
<body>
    <div class="container mt-5">
    <?php include 'msg.php';?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Editar Produtos
                            <a href="app.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                         <?php
                            if(isset ($_GET['id'])){
                                $idproduto = mysqli_real_escape_string($con, $_GET['id']);
                                $requisicao = "SELECT *  FROM produto WHERE id = '$idproduto' ";
                                $query_run = mysqli_query ($con, $requisicao);
                                if(mysqli_num_rows($query_run)>0){
                                    $produto =mysqli_fetch_array($query_run);
                                    ?>
                                <form action="codes.php" method="post">
                                    <input type="hidden" name="id" value="<?= $produto['id'];?>">
                                    <div class="mb-3">
                                    <label for="Nome">Produto</label>
                                    <input type="text" name="nomeproduto" value="<?= $produto['nomeproduto'];?>" class="form-control">                                    
                                    </div>
                                    <div class="mb-3">
                                    <label for="Nome">Quantidade</label>
                                    <input type="text" name="quantidade" value="<?= $produto['quantidade'];?>" class="form-control">                                    
                                    </div>
                                    <div class="mb-3">
                                    <label for="Nome">Unidades</label>
                                    <input type="text" name="unidade" value="<?= $produto['unidade'];?>" class="form-control">                                    
                                    </div>                               
                                    <div class="mb-3">
                                        <button type="submit" name="atualizar" class="btn btn-primary float-end">Atualizar</button>
                                    </div>
                                </form>
                                <?php
                                }
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