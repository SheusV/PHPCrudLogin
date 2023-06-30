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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <title>Inicio</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
<span class="badge rounded-pill text-bg-secondary"><?php echo " Usuario Logado:" . $_SESSION['nome'];?></span>
          <ul class="nav justify-content-end ">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sair</a>
                </li>
                
            </ul>
    <div class="container mt-3">
        <?php include 'msg.php';?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card_header p-2">
                        <h4>
                            Detalhes do Cliente
                            <a href="criarProduto.php" class="btn btn-primary float-end">Criar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderred table-striped">
                         <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Unidade</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php 
                                $requisicao = "SELECT * FROM produto";
                                $query_run = mysqli_query($con, $requisicao);
                                if(mysqli_num_rows($query_run)>0){
                                    foreach($query_run as $produto){
                            ?>
                            <tr>
                                <td><?=$produto['id'];?></td>
                                <td><?=$produto['nomeproduto'];?></td>
                                <td><?=$produto['quantidade'];?></td>
                                <td><?=$produto['unidade'];?></td>
                                
                                
                                <td>
                                  <a href="verProduto.php?id=<?=$produto['id'];?>" class="btn btn-info btn-sm">Detalhes</a>
                                  <a href="editarProduto.php?id=<?=$produto['id'];?>" class="btn btn-success btn-sm">Editar</a>
                                  <form action="codes.php" method="post" class="d-inline">
                                    <button type="submit" name="deletar" value="<?=$produto['id'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                   

                                  </form>

                                </td>
                        

                            </tr>
                            <?php
                                }

                            }else{
                                
                            }
                            ?>
                         </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>


    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>