<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Man's Club</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="cdn/css/bootstrap_person.css">
  <link rel="stylesheet" href="cdn/css/app.css">

</head>
<body>

  <div class="main_login">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 login_background bg-my-primary d-none d-md-block">

        </div>
        <div class="col-12 col-md-6">
          <div class="login_form d-flex flex-column justify-content-center align-items-center">
            <h2>Login</h2>
            <form >
              <div class="my-4">
                <input type="email" class="form-control rounded-3 " placeholder="email">
              </div>
              <div class="mb-4">
                <input type="password" class="form-control rounded-3" placeholder="senha">
              </div>
              <button type="submit" class="btn btn-my-primary btn-lg rounded-3 mb-3">logar</button>
              <div class="form-text forgot_password"><a href="" class="text-decoration-none">esqueci a senha</a></div>
            </form>

            <div class="login_social mt-5">
              <h2>ou logue com</h2>
              <ul class="mt-4 mb-5">
                <li><a href=""><img src="assets/images/icons/google.svg" alt="Google Login"></a></li>
                <li><a href=""><img src="assets/images/icons/facebook.svg" alt="Facebook Login"></a></li>
              </ul>
              <p>Não possui conta? <strong><a href="">Cadastre-se</a></strong></p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
