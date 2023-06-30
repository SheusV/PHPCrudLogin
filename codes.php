<?php 
    session_start();
    require'conex.php';


    //criar rotinas de inserir dados no banco
    if(isset($_POST['salvarProduto'])){
        $nomeproduto = mysqli_real_escape_String($con,$_POST['nomeproduto']);
        $quantidade = mysqli_real_escape_String($con,$_POST['quantidade']);
        $unidade = mysqli_real_escape_String($con,$_POST['unidade']);
        

        $requisicao="INSERT INTO produto(nomeproduto,quantidade,unidade) VALUES('$nomeproduto','$quantidade', '$unidade')";
        $querry_run = mysqli_query($con,$requisicao);

        if($querry_run){
            $_SESSION['mensagem'] ="Produto Criado com sucesso!";
            header("Location: criarProduto.php");
            exit(0);

        }else{
            $_SESSION['mensagem'] ="Produto Não criado!";
            header("Location: criarProduto.php");
            exit(0);
        }


    }
// criando rotina de update
if(isset($_POST['atualizar'])){
    $idproduto= mysqli_real_escape_string($con, $_POST['id']);
    $nomeproduto = mysqli_real_escape_string($con, $_POST['nomeproduto']);
    $quantidade = mysqli_real_escape_string($con, $_POST['quantidade']);
    $unidade = mysqli_real_escape_string($con, $_POST['unidade']);
   

    $requisicao = "UPDATE produto SET nomeproduto='$nomeproduto', quantidade='$quantidade', unidade='$unidade' WHERE id= '$idproduto'";
    $query_run= mysqli_query($con, $requisicao);
    if($query_run){
        $_SESSION['mensagem'] ="Produto Atualizado com sucesso!";
        header("Location: editarProduto.php");
        exit (0);
    }else{
        $_SESSION['mensagem'] ="Produto NÃO atualizado!";
        header("Location: editarProduto.php");
        exit (0);
    }

}

if(isset($_POST["deletar"])){
    $idproduto = mysqli_real_escape_string($con,$_POST['deletar']);
    $requisicao = "DELETE FROM produto WHERE id= '$idproduto'";
    $query_run =mysqli_query($con, $requisicao);
    if($query_run){
        $_SESSION['mensagem'] ="Produto Deletado!";
        header("Location:app.php");
        exit(0);
    
    }else{
        
        header("Location:app.php");
        exit(0);
    }

}



?>