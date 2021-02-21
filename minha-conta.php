<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha conta | Man's Club</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="cdn/css/bootstrap_person.css">
  <link rel="stylesheet" href="cdn/css/app.css">

</head>

<body>

  <nav class="navbar main_navbar">
    <div class="container-fluid justify-content-center justify-content-md-between px-md-9">
      <a href="" class="text-decoration-none">Man's <br> Club</a>

      <div class="navbar_buttons text-center">
        <button type="button" class="btn btn-my-secondary btn-lg rounded-3 ">Fique sempre no topo!</button>
        <button type="button" class="btn btn-my-primary btn-lg rounded-3">minha conta</button>
      </div>
    </div>
  </nav>

  <main class="main_account mt-7">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 main_navsidebar text-center h-auto d-none d-lg-block">
          <div class="profile_photo">
            <img src="assets/images/profile-photo.jpg" class="rounded-circle mt-4" alt="Fulano de tal">
          </div>

          <ul class="nav flex-column mt-7">
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="assets/images//icons/premium.svg" alt="SEJA VIP"> SEJA
                VIP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Minha conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Meus serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="#">Cadastrar serviço</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">sair</a>
            </li>
          </ul>
        </div>

          <!-- Menu Mobile -->
          <nav class="navbar navbar-expand-lg navbar-expand-lg navbar-light bg-light d-lg-none main_navsidebar_mobile">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" href="#"><img src="assets/images/icons/premium.svg" alt="SEJA VIP"> SEJA VIP</a>
                <a class="nav-link" href="#">Minha conta</a>
                <a class="nav-link" href="#">Meus serviços</a>
                <a class="nav-link" href="#">Cadastrar serviço</a>
                <a class="nav-link" href="#">sair</a>
              </div>
            </div>
          </nav>


        <div class="col-md-12 col-lg-9">
          <section class="my_account mx-3 p-3">
            <h3>Minha conta</h3>
            <span>altere seus dados</span>

            <form class="mt-6">

              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="full_name" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="full_name">
                  </div>
                  <div class="mb-3">
                    <label for="nickname" class="form-label">Apelido* <small>(nome que irá aparecer nos
                        anuncios)</small></label>
                    <input type="text" class="form-control" id="nickname">
                  </div>
                  <div class="mb-3">
                    <label for="document" class="form-label">CPF/CNPJ</label>
                    <input type="text" class="form-control" id="document">
                  </div>

                  <div class="mb-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="genre" id="feminino" value="Feminino">
                      <label class="form-check-label" for="feminino">Feminino</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="genre" id="masculino" value="Masculino">
                      <label class="form-check-label" for="masculino">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="genre" id="nao-informar" value="Não informar">
                      <label class="form-check-label" for="nao-informar">Não informar</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="email" class="form-label">E-mail</label>
                      <input type="email" class="form-control" id="email" placeholder="fulano@email.com.br">
                      <div class="checked"><img src="assets/images/icons/checked.svg" alt="verificado"> verificado</div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="phone" class="form-label">Telefone</label>
                      <input type="tel" class="form-control" id="phone">
                      <div class="checked"><img src="assets/images/icons/not-checked.svg" alt="não verificado"> não verificado</div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="mb-3">
                    <label for="zipcode" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="zipcode">
                  </div>
                  <div class="mb-3">
                    <label for="street" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="street">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="number" class="form-label">Número</label>
                        <input type="number" class="form-control" id="number">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="complement" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complement" placeholder="ex.: Bloco 1 Fundos">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="references" class="form-label">Ponto de referência</label>
                    <input type="text" class="form-control" id="references" placeholder="ex.: Próx ao supermecado">
                  </div>

                  <div class="mb-3">
                    <label for="password_new" class="form-label">Nova senha</label>
                    <input type="password" class="form-control" id="password_new" placeholder="********">
                  </div>

                  <div class="mb-3">
                    <label for="password_repeat" class="form-label">Repita a senha</label>
                    <input type="password" class="form-control" id="password_repeat" placeholder="********">
                  </div>

                  <div class="text-center mt-lg-8">
                    <button type="submit" class="btn btn-my-primary btn-lg rounded-pill">salvar dados</button>
                  </div>
                </div>
              </div>
            </form>

            <div class="account_delete mt-5 p-4 d-flex flex-wrap justify-content-evenly align-items-center">
              <img src="assets/images/icons/warning.svg" alt="desativar minha conta">
              <div class="info-text my-3 my-md-0 text-center">
                <p class="m-0">Desativar minha conta</p>
                <p class="m-0">Seu perfil será desabilitado e anúncios excluídos. Você pode reativar sua conta quando quiser.</p>
              </div>
              <a href="#">desativar</a>
            </div>
          </section>
        </div>

      </div>
    </div>



  </main>

  <!-- scripts -->
  <script src="main.js"></script>

</body>

</html>
