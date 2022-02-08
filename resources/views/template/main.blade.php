<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/css/bootstrap.min.css" >
    <!-- Bootstrap Customizado CSS -->
    <link rel="stylesheet" href="./css/custom-bootstrap.css" >
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="./css/estilo.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
    <title>@yield('title')</title>
  </head>
  <body>
      <header>
      <div id="main_header" class="flex">
            <div class="box_header_left"><ion-icon name="logo-whatsapp"></ion-icon>(11)2863-0153 <ion-icon name="mail-outline"></ion-icon> contato@assistencia24hs.srv.br</div>
            <div class="box_header_right">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
            <ion-icon name="logo-whatsapp"></ion-icon>
            </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-preto border_nav">
  <a class="navbar-brand" href="./">
      <img src="./image/logotipo.png" width="150" alt="" >
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./"> <ion-icon name="home-outline"></ion-icon> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./quem-somos"><ion-icon name="information-circle-outline"></ion-icon> Quem Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./beneficios"><ion-icon name="accessibility-outline"></ion-icon>Beneficios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./assistencia-24hs"><ion-icon name="hand-right-outline"></ion-icon> Assistência 24Hs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contrate"><ion-icon name="thumbs-up-outline"></ion-icon> Contrate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contato"><ion-icon name="call-outline"></ion-icon> Contato</a>
      </li>
     

    </ul>
 
  </div>
</nav>
    </header>
    @yield('content') 

    <!-- Optional JavaScript; choose one of the two! -->


    <footer class="footer">

      <div class="container">
       <div class="row">
          <div class="box_footer"> 
          <div class="row">
            <div class="col-2 col-xs-12">
            <ion-icon name="logo-whatsapp" style="font-size: 3em; margin-top:10px; color:#fff;">
            </div>
            <div class="col-10 col-xs-12">
              <h5>Seja Associado</h5>
              <h5>(11)2186-0153</h5>
            </div>
          </div>  

          </div>
          <div class="box_footer"> 
            <button class="btn btn-success btn-lg"> <a href="./contrate"style="text-decoration:none; color:#fff;">Contratar</a></button>
          </div>
          <div class="box_footer"> 
          <div class="row">
            <div class="col-2 col-xs-12">
            <ion-icon name="alarm" style="font-size: 3em; margin-top:10px; color:#fff;">
            </div>
            <div class="col-10 col-xs-12">
              <h5>Horário Atendimento</h5>
              <p>2º à 6ºfeiras das 09:00 às 17:00hs</p>
            </div>
          </div>    

          </div>
          </div>
      </div>
    </footer>
    
      <div class="container-fluid bg-preto">
        <p class="text-center text-white">Todos Direitos Reservaods &copy; - Assistência 24hs - 2022 </p>
      <p class="text-center text-white">Desenvolvido por <a href="https://www.dflixcontrol.com.br" target="_blank" style="text-decotarion:none;"><span style="color:orange;">Dflix Control</span></a></p>
      </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>