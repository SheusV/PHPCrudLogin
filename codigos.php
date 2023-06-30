
<?php
 include 'conex.php';
  if(isset($_POST['registrar'])){
        if($_POST['senha'] == $_POST['rsenha']){
             $nome = mysqli_real_escape_string($con, $_POST['nome']);
             $email = mysqli_real_escape_string($con, $_POST['email']);
             $senha = password_hash(mysqli_real_escape_string($con, $_POST['senha']), PASSWORD_DEFAULT);
             $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
             $query = "INSERT INTO usuarios (nome, email, endereco, senha) VALUES ('$nome', '$email','$endereco', '$senha')";
             $query_run = mysqli_query($con,$query);

             header("Location:index.php");
            exit(0);

        }
        else{
            header("Location:cadastro.php");
            exit(0);
        }
    }
    //else{
      //      header("Location:cadastro.php");
        //    exit(0);
       // }

    if(isset($_POST['entrar'])){

        $email = mysqli_real_escape_string($con,$_POST['email']);
        $senha = mysqli_real_escape_string($con,$_POST['senha']);
        $query = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1 ";
        $query_run = mysqli_query($con,$query);
        $usuario = $query_run -> fetch_assoc();

        if(password_verify($senha,$usuario['senha'])){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['nome']=$usuario['nome'];
            $_SESSION['id']=$usuario['id'];
            header("Location: app.php");
            exit(0);
        }else
        {
            echo"Usuario ou senha invalido!";
            header("Location: index.php");
            exit(0);
        }
    }

    include "protect.php";
?>