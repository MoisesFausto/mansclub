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
        <div class="col-md-2 main_navsidebar text-center vh-100 _h-auto d-none d-lg-block">
          <div class="profile_photo">
            <img src="assets/images/profile-photo.jpg" class="rounded-circle mt-4" alt="Fulano de tal">
          </div>

          <ul class="nav flex-column mt-7">
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="assets/images//icons/premium.svg" alt="SEJA VIP"> SEJA
                VIP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Minha conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="#">Meus serviços</a>
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
          <section class="my_services vh-100 mx-3 p-3">
            <h3>Meus anúncios</h3>

            <div class="mt-7">
              <div class="service_status">
                <button class="btn btn-primary border py-lg-3 px-lg-5" type="button" data-bs-toggle="collapse" data-bs-target="#publicados" aria-expanded="false" aria-controls="publicados">
                  Publicados <span class="badge bg-my-secondary">2</span>
                </button>
                <button class="btn btn-primary border py-lg-3 px-lg-5" type="button" data-bs-toggle="collapse" data-bs-target="#aguardando_aprovacao" aria-expanded="false" aria-controls="aguardando_aprovacao">
                  Aguardando aprovação <span class="badge bg-my-secondary">1</span>
                </button>
                <button class="btn btn-primary border py-lg-3 px-lg-5" type="button" data-bs-toggle="collapse" data-bs-target="#inativos" aria-expanded="false" aria-controls="inativos">
                  Inativos <span class="badge bg-my-secondary">3</span>
                </button>
              </div>

              <div class="service_list col-6 mt-4">

                <div class="collapse border mb-4 py-3 px-5" id="publicados">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <img src="assets/images/service.jpg" class="img-fluid" alt="Barberia 40°">
                    </div>
                    <div class="col-12 col-md-6">
                      <h2>Barbeiro 40 Graus</h2>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="" class="text-decoration-none">clique e saiba mais</a>
                    </div>
                  </div>
                </div>

                <div class="collapse border mb-4 py-3 px-5" id="publicados">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <img src="assets/images/service.jpg" class="img-fluid" alt="Barberia 40°">
                    </div>
                    <div class="col-12 col-md-6">
                      <h2>Barbeiro 40 Graus</h2>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="" class="text-decoration-none">clique e saiba mais</a>
                    </div>
                  </div>
                </div>

              </div>
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
