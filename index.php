<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SIS-LOGIN</title>
</head>
<body>
 <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="logo2-PhotoRoom.png-PhotoRoom.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="codigos.php" method="POST">
          

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
              placeholder="Entre com seu email" />
            <label class="form-label" for="form3Example3">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name="senha" class="form-control form-control-lg"
              placeholder="Entre com sua senha" />
            <label class="form-label" for="form3Example4">Senha</label>
          </div>

          <div class="d-flex justify-content-between align-items-center"></div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="entrar"  class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Entrar</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Não tem uma conta? <a href="cadastro.php"
                class="link-danger">Registrar</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>