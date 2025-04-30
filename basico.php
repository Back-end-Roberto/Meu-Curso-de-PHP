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

  <title> PHP </title>

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
              <li class="nav-item active">
                <a class="nav-link" href="basico.php">Básico <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="intermediario.php">Intermediário</a>
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
            Nivel <span>Básico</span>
          </h2>
          <p>
            <p>Iniciei os estudos de PHP básico no dia <strong>04 de abril de 2025</strong>.</p><BR> Havia um conhecimento previo básico de HTML e CSS quando dei Start nos estudos de PHP, desta forma consigui reestruturar o template e agilizar o projeto já que o foco é o back-end neste momento. O template foi reestruturado de forma a encaixar os modulos de códigos aprendidos em PHP para ficar mais agradável de visualizar e programar.
            <p>Este template foi baixado do site <a href="https://www.free-css.com/free-css-templates">Free-css-templates</a> e todos os créditos ao front são deles.</p><BR><BR><BR>
            <h2>Itens de Estudo</h2>
            
            
              <p>
                <ul>
                  <li>Sintaxe</li>
                  <li>Variáveis</li>
                  <li>Tipos de Dados</li>
                  <li>Operadores</li>
                  <li>Estruturas de Controle</li>
                  <li>Funções</li>
                  <li>Arrays</li>
                  <li>Integrações com HTML</li>
                  <li>Include e Require</li>
                  <li>Sessões e Cookies</li>
                </ul>
              </p><BR><BR>
            <h2><span>Isto que esta sendo exibido pelo PHP:</span></h2>
            <BR><BR>
            <h2>Sintaxe</h2>
            <p>



            <?php
                //aqui começa o PHP.
                //codigo php vai aqui dentro. tudo que estiver aqui dentro vai ser processado em php. Pode abrir e fechar a tag do php quantas vezes quiser ou fazer tudo em uma só! Isto em verde é um comentario. não é exibido na tela
                ?>
                
                <?php
                echo "Olá mundo!<BR><BR>";
                echo "<strong>PRE REQUISITO:</strong> HTML BÁSICO! - abra o arquivo basico.php para analisar o codigo. Esta tudo comentado para o melhor entendimento.<BR><BR>";
                echo "Este paragrafo está sendo exibido pela função <strong>echo</strong> do php. O echo é um comando de saida e serve para exibir na tela oque você por para o echo mostrar.<BR><BR>";
                echo "Você precisa abrir o arquivo basico.php para analisar os codigos php que estão comentados com a explicação do que cada coisa faz.<BR><BR>";
                echo "Todo codigo termina com ponto e virgula ;<BR><BR>";
                ?>


                <?php
                echo "Neste paragrafo, estou mostrando como podem ser usados os comentarios em php.<BR>"
                //Comentario de uma linha podem ser com barras duplas
                # Tambem serve para comentar uma linha
                /*este é para textos longos de varias*/
                ?>
                <BR><BR>
<h2><span>Variáveis </span>em PHP</h2>
<BR><BR>

                <?php 
                echo "As variáveis em PHP iniciam com $ e são case-sensitive, isto é, maiusculas e minusculas fazem diferença.<BR>";
                // Este é um exemplo de variávial: $variavel
                //inicializando variaveis:
                $nome="Roberto Dantas";
                $idade=45;
                echo "Meu nome é $nome e tenho $idade anos.<BR>";
                echo "<p>Strings devem estar com aspas duplas ou simples e numeros sem aspas!</p>"
                ?>
<BR><BR>
<h2><span>Operadores</span></h2>
<BR><BR>
                <?php
                echo "Operadores em PHP<BR><BR>";
                echo "<p>Abaixo há calculos usando operadores:</p>";
                $soma = 5+3;
                $subtracao = 10/2;
                $multiplicacao = 2 * 10;
                $divisao = 40/4;
                $resto = 5%2;
                echo "soma: $soma, subtração: $subtracao, multiplicacao: $multiplicacao, divisão: $divisao, resto de divisao: $resto<BR>";
                // o simbolo de = significa atribuição. algo esta sendo atribuido.
                // o simbolo == significa uma igualdade, algo é igual a outro.
                // o simbolo === significa que alem de igual é do mesmo tipo de dado.
                // o simbolo != significa diferente.
                // o simbolo > significa maior que.
                $nome = "Maria";
                $sobre_nome = "Silva";
                //para concatenar usa-se o .
                echo "$nome " . "$sobre_nome<BR><BR>";
                ?>
                
                <BR><BR>
<h2>Estruturas de <span>controle</span></h2>
<BR><BR>

                <?php
                //conhecendo o if, elseif e else
                echo "<p>Conhecendo o if do php</p><BR>";
                $idade = 13;
                if ($idade >= 18){
                  echo "É de maior, pode sair a noite";
                }elseif($idade >=12){
                  echo "É adolencente, melhor estudar";
                }else{
                  echo "É de menor";
                }
                ?>
                <BR><BR><BR>
<h2><span>Conhecendo o </span>try catch</h2>
<BR><BR>

                <?php
                try {
                    
                    $resultado = 10 / 0;
               } catch (DivisionByZeroError $e) {
                    echo "Erro: " . $e->getMessage();
                }
                //division by zero error é um erro matematico que sera exibido caso alguem tente dividir algum numero por 0
                //exception pode ser usado para um erro generico
                ?>
<BR><BR><BR>
<h2><span>Switch Case</span></h2>
<BR><BR>
                <?php
                //calculadora simples
                function calcular($a,$b,$op){
                  switch ($op){
                    case "+": return $a+$b;
                    case "-": return $a-$b;
                    case "/": return $a/$b;
                    case "*": return $a*$b;
                  }
              
                }
                
                echo "Chamada da função com retorno de valor: ". calcular(10,2,"/");
                
                echo "<BR><BR>";
                ?>

<BR><BR>
<h2>Funções</h2>
<BR><BR>
                <?php

                function mostra_nome($nome,$sobre_nome){
                  echo " - Seu nome é: $nome e seu sobre nome é: $sobre_nome";
                }
                echo mostra_nome("Roberto", "Dantas");
echo "<BR><BR>";
                function calc($a,$b,$s){
                  $calc=($a+$b)/$s;
                  return $calc;
                }
                
                  echo calc(15,15,3);
 echo "<BR><BR>";
                 ?>  
<BR><BR>
<h2><span>Integrações de </span>HTML com PHP</h2>
<BR><BR>

                
                <form action="basico.php" method="get">
                  <label for="nome">Nome:</label>
                  <input type="text" id="nome" name="nome">

                  <label for="email">Email:</label>
                  <input type="text" id="email" name="email">

                  <button type="submit">Enviar</button>
                </form>
                
                <?=
                $nome = filter_input(INPUT_GET,"nome") ?? "";
               echo "Seu nome é: $nome";
               echo "<p>URL com parâmetros: " . $_SERVER["REQUEST_URI"] . "</p>"
                ?>
                
                <BR><BR><BR>
<h2>Colocando aprendizado dentro de CSS e com códigos de maior segurança.</h2>
<BR><BR>

            </p>
          </p>
        </div>
        <div class="row">





          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Formulario
                </h5>
                <p>Formulário com validação. Verifica se esta preenchido e se email é válido.</p>
                <p>
                <form method="get" action="basico.php">
                  <label for="nome" id="nome">Nome:</label>
                  <input type="text" id="nome" name="nome">
                  <p></p>
                  <label for="email" id="email">Email:</label>
                  <input type="text" id="email" name="email">
                  <p></p>
                  <button type="submit">Enviar</button>
                </form> 
                <BR> 
                  <?php
                    if (!empty($_GET["nome"]) && !empty($_GET["email"])){
                      $nome = htmlspecialchars($_GET["nome"]);
                      $email = filter_var($_GET["email"],FILTER_SANITIZE_EMAIL); 
                      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                        echo "<h2>Dados válidos:</h2>";
                        echo "<p>Nome: $nome</p>";
                        echo "<p>Email: $email</p>";
                      }else{
                        echo "<p>Email inválido!</p>";
                      }
                      
                    }
                  else {
                    echo "<p>Preencha os campos para continuar</p>";
                  }  
                  ?>
                   
              
              
              
              </p>

                
              </div>
            </div>
          </div>






          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Cookies
                </h5>
                <p>
                  <strong>Sobre Cookies</strong>
                </p>
                  <?php
                  echo "<p>Usar Cookie quando:</p>";
                  echo "<p>Lembrar login (se usuário permtir).</p>";
                  echo "<p>Salvar configuração de UI (tema, idioma).</p>";
                  echo "<p>Rastrear visitas (Google Analytics).</p>";
                  ?>

                
              </div>
            </div>
          </div>


          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Banco de Dados
                </h5>
                <p>Para os aprendizados, estou usando o XAMPP que já vem com Mysql integrado. Basta abrir o terminal do MariaDB e dar os comandos abaixo para criar seu primeiro banco de dados:</p>
                <p>No terminal digite: <strong>mysql -u root -p</strong></p>
                <p>Use o comando CREATE e de um nome ao seu banco de dados: <strong>CREATE nome_do_banco</strong></p>
                <p>Agora informe ao MariaDB que você vai usar o banco com o comando: <strong>USE nome_do_banco</strong></p>
                <p>Para um login simples, crie uma tabela e de um nome a tabela como no exemplo:</p>
                <p><strong>
                  CREATE TABLE `usuarios` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `username` varchar(50) NOT NULL,
                    `password` varchar(255) NOT NULL,
                    PRIMARY KEY (`id`)
                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
                </strong></p>
                
              </div>
            </div>
          </div>
          




          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Security Storage
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