<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Intermediário </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
            Niveis de Conhecimento PHP
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="basico.php"> Básico</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="intermediario.php">Intermediário <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="avancado.php">Avançado</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Nivel <span>Intermediário</span>
          </h2>
          
          <p>Conceitos e códigos para aprendizado dos itens de conhecimento intermediário em PHP. O conhecimento intermediário exige estudos de programação orientada a objetos.</p>
         
          <p>Nesta pagina temos também um botão para login proximo ao menu e um lupa para buscar informações no site. Será implementado os códigos necessários para estas funcionalidades extras. Farei o login e buscador no final dos estudos do nivel intermediário para que o acesso ao conteudo avançado seja acesso atravéz de cadastro e login no site.</p>

          <p>Esta sendo usado para o aprendizado, Windows10, XAMPP 3.3.</p>



        </div>
        <div class="row">

          

          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Conceitos de Objetos
                </h5>
                <p>
                  Um exemplo prático de explicar sobre objetos, é usando a biologia como propoe o pai da Orientação a Objetos Alan Kay. Nós somos um obeto da classe mamiferos. Da classe mamiferos podem sair vários outros objetos, como cães, gatos, etc. Cada novo <strong>ojeto precisa ter atributos, metodos e estado</strong>.
                </p>
                Usando humanos como exemplo, <strong>atributos</strong> é oque cada humano (obejto) tem. Podem ter: cor da pele, cor dos olhos, do cabelo, altura, peso. Os <strong>metodos</strong> é o que os humanos podem fazer, como por exemplo: Andar, correr, pular, esticar os braços, comer, dirigir. Já o <strong>estado</strong>, é como está o objeto humano num determinado momento, como por exemplo: estar acordado, dormindo, estudando, trabalhando.
                
              </div>
            </div>
          </div>


          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Classes em PHP 
                </h5>
                <p>
                  No PHP podemos ter várias classes no mesmo arquivo!
                </p>
                <p>Estou criando uma classe chamada Caneta. Abra o código fonte para ver:</p>

                <?php

                class Caneta {
                  var $modelo;
                  var $cor;
                  var $ponta;
                  var $carga;
                  var $tampada;
                

                function rabiscar(){
                  if ($this->tampada == true){
                    echo "<p>ERRO! Não posso rabiscar pois estou tampada!</p>";
                  }else{
                    echo "<p>Estou rabiscando...</p>";
                  }
                }
                function tampar(){
                  $this->tampada=true;
                }
                function destampar(){
                  $this->tampada=false;
                }
              }
                ?>

                <p>Agora vou instanciar da classe humano um novo objeto chamado novo_humano, e vou colocar alguns atributos da classe usando o sinal: <strong>-></strong></p>
                <p>Vou usar o comando print_r para mostrar o conteudo do objeto novo_humado.</p>

                <?php
                $c1 = new Caneta;
                $c1->modelo = "BIC";
                $c1->cor = "azul";
                $c1->ponta = 0.5;
                $c1->tampada;

                $c1->tampar();  
                $c1->rabiscar();

                print_r($c1);
                echo "<BR><BR>";

                $c2 = new Caneta;
                $c2->modelo="Faber Castel";
                $c2->cor = "vermelha";
                $c2->ponta = 0.9;
                $c2->tampada;
                print_r($c2); 


                

                
                ?>


              </div>
            </div>
          </div>
          




          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Visibilidade de Objetos
                </h5>
                <p>
                  




                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Expert Support
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            View All
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="service.html">
                Services
              </a>
              <a class="" href="why.html">
                Why Us
              </a>
              <a class="" href="team.html">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>