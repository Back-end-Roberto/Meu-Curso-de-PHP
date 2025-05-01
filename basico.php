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

  <title> Básico </title>

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
          <h2>Nivel <span>Básico</span></h2>
            <p>Iniciei os estudos de PHP básico no dia <strong>04 de abril de 2025</strong>.</p>
            <p>Estudando uma média de 4 horas por dia, foi possivel aprender os conceitos básicos de PHP. Hoje <strong>01 de maio de 2025</strong> foi finalizado os estudos de PHP básico.</p>
            <BR>
            <p>Para compreender os estudos de PHP básico, é necesário conhecimentos básicos de HTML e CSS, pois códigos PHP podem ser escritos dentro das tags HTML. Para otimizar o tempo, optei por usar um template pronto. O template foi reestruturado de forma a encaixar os modulos de códigos aprendidos em PHP para ficar mais agradável de visualizar e programar.</p>
            <BR>
            <p>Este template foi baixado do site <a href="https://www.free-css.com/free-css-templates">Free-css-templates</a> e todos os créditos ao front são deles.</p>
            <BR>
                     
          <h2><span>Nem todo o código irá aparecer aqui:</span></h2>
            <p>O HTML junto do CSS e em alguns templates, junto de JavaScript, formam a interface, onde tudo fica bonito e organizado para ser aprensentado na tela. É conhecido como <strong>front-end</strong>, pois está sendo processado e exibido na frente. É oque os usuários visualizam e interagem.</p>
            <p>Para acompanhar os estudos em PHP, você deve transformar seu computador em um servidor, pois o PHP é uma linguagem de programação que roda do lado do servidor. Linguagens que rodam do lado do servidor são <strong>back-end</strong>, traduzindo a grosso modo do ingles: "na parte de trás", ou seja, atrás da parte bonita que está sendo apresentada na tela. Como o PHP esta rodando na parte de trás, a programação não necessáriamente irá aparecer no front, ao menos que seja programada para que isso ocorra.</p>
            <p>Para transformar sua maquina em um servidor, se estiver usando Windows, baixe o XAMPP, e instale, é bem tranquilho. Um pouco de conhecimento de redes de computadores também é excencial para corrigir problemas de portas se houver necessidade, pois o XAMPP usa algumas portas para criar o servidor e o banco de dados, mas só se der erro que será necessário corrigir, não acontece com frequencia. Há relatos que o Skype as vezes entra em conflito de porta e o XAMPP não funciona, pois o Skype que foi instalado primeiro, ja pegou a porta para ele o XAMPP tenta usar a mesma porta, sendo necessário alterar o numero da porta no proprio XAMPP.</p>
            <p>Com XAMPP instalado, agora basta navegar no seu C: onde ele foi instalado e procurar pela pasta <strong>htdocs</strong>. A pasta htdocs será o seu <strong>servidor Web</strong> daqui pra frente. Toda pasta criada dentro da pasta htdocs será o projeto de um site. Por exemplo, se voce criar a pasta "primeiro_site" e dentro dela colocar um arquivo chamado index.html ou index.php, ao acessar o servidor ele rodará seu index.</p>
            <p>Se você conheceu este projeto dentro do github, já esta familiarizado como abrir arquivos vindo do git, se veio de um site externo, terá de acessar meu git <a href="https://github.com/Back-end-Roberto">clicando aqui</a> e baixar os arquivos para dentro da pasta do seu servidor web. Você baixará o conteudo do repositório chamado <strong>Meu-Curso-PHP.</strong>Estou levando em consideração que você tem conhecimentos básicos de git.</p>
            <p>Com XAMPP instalado e arquivos na mão, agora bora analisar e estudar os códigos que estão por tras do front-end!</p>
            <BR><BR>
          </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="detail-box">
                <h5>
                  Exibindo PHP no HTML
                </h5>
                <p>
                <?php 
                //Aqui começa o PHP.
                //Código php vai dentro das tags: <?php ....código ..... 
                //Tudo que estiver aqui dentro vai ser processado em php.
                //Isto em verde é um comentario. Não é exibido na tela
                ?>
                
                <?php
                //mostrar no front a frase Olá Mundo com código PHP:
                echo "<p>Olá mundo!</p>";
                echo "<p><strong>PRÉ REQUISITO:</strong> HTML BÁSICO! - Conhecimento das tags básicas do html para entender o código. Veja que na frase Olá Mundo, tem a tag de paragrafo em html e aqui também.</p>";
                echo "<p>Este paragrafo está sendo exibido pela função <strong>echo</strong> do php. O echo é um comando de saida e serve para exibir na tela o que você por para o echo mostrar.</p>";
                echo "<p>Aqui você encontra códigos para analisar que estão comentados com a explicação do que cada coisa faz.</p>";
                echo "Todo código termina com ponto e virgula ; e se faltar o ponto e virgula, um erro de sintaxe será exibido.";
                ?>
                          
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="detail-box">
                <h5>
                  Variáveis
                </h5>
                <p><strong>PRÉ REQUISITO:</strong> conhecimentos em algoritimos.</p>
                <?php 

                echo "<p>As variáveis em PHP iniciam com $ e são <strong>case-sensitive</strong>, isto é, maiusculas e minusculas fazem diferença.</p>";
                // Este é um exemplo de variávial: $variavel

                //inicializando variaveis:
                $nome = "Roberto Dantas";
                $idade = 45;

                echo "<p>Meu nome é $nome e tenho $idade anos.</p>";

                echo "<p>Strings são formações de caracteres, ou seja, palavras, as strings devem estar com aspas duplas ou simples e numeros sem aspas! Veja novamente:</p>";
                $nome = "Maria";
                $peso = 69;

                echo "<p><strong>Variáveis Locais</strong> só podem ser usadas dentro de funções. Elas não funcionam fora da função onde foi criada. Abaixo um exemplo de variável local:</p>";
                function teste(){
                  $varteste = 15;
                }
                echo "<p>$varteste</p>";
                //note que foi exibido um erro de variável indefinida porque a variavel foi chamada para ser exibida fora de sua função.

                echo "<p><strong>Variáveis Globais</strong> podem ser usadas em qualquer lugar do projeto mas o uso não é recomendado pois torna o código dificil de ler e manter. Abaixo um exemplo:</p>";

                echo "<p>Resumindo: Para declarar uma variável, basta por $ na frente do nome da variável. Variáveis globais devem ser evitadas em códigos complexos. Variáveis locais só funcionam dentro de onde estão e para atribuir valores as variáveis, se for texto, use as aspas, se for numero, não use aspas.</p>";
                ?>
                         
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="detail-box">
                <h5>
                  Operadores
                </h5>
                
                <?php
                echo "<p>Operadores em PHP</p>";
                echo "<p>Abaixo há calculos usando operadores. Foi criado variáveis com o nome do operador e o exemplo de uso. Só está visivel em código.</p>";
                $soma = 5 + 3;
                $subtracao = 10 / 2;
                $multiplicacao = 2 * 10;
                $divisao = 40 / 4;
                $resto_da_divisao = 5 % 2;
                echo "<p>soma: $soma, subtração: $subtracao, multiplicacao: $multiplicacao, divisão: $divisao, resto de divisao: $resto_da_divisao</p>";
                // o simbolo de = significa atribuição. algo esta sendo atribuido.
                // o simbolo == significa uma igualdade, algo é igual a outro.
                // o simbolo === significa que alem de igual é do mesmo tipo de dado.
                // o simbolo != significa diferente.
                // o simbolo > significa maior que.
                // o perador ++ é usado para incremento e -- para decremento
                $nome = "Maria";
                $sobre_nome = "Silva";
                //para concatenar usa-se o .
                echo "<p>$nome " . "$sobre_nome</p>";

                echo "<p>Exemplos de operadores binários/lógicos:</p>";
                // & é o E ou AND
                // | é o OU ou OR
                // ! é o NÃO ou NOT
                echo "<p>Para saber mais sobre operadores veja o manual do PHP</p>";
                echo "<a href='https://www.php.net/manual/pt_BR/language.operators.php' target='_blank'><button >Manual</button></a>";
                ?>
                           
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Estruturas de Controle
                </h5>
                <?php
                //conhecendo o if, elseif e else
                echo "<p>Conhecendo o <strong>if</strong> do php</p>";
                $idade = 13;
                if ($idade >= 18){
                  echo "<p>É de maior, pode sair a noite</p>";
                }elseif($idade >=12){
                  echo "<p>É adolencente, está quase lá!</p>";
                }else{
                  echo "<p>É de menor, fique em casa</p>";
                }

                 echo "<p>Conhecendo o laço <strong>for</strong></p>"; 
                 for ($numero=0;$numero<=3;$numero++) {
                  echo "$numero, ";
                 }

                 echo "<p>Conhecendo o <strong>While</strong></p>";
                 $numero = 1;
                 while ($numero <= 4){
                  echo $numero++;
                  echo " - ";
                 }

                 echo "<p>Conhecendo o <strong>Foreach</strong></p>";
                 echo "<p>O foreach é habitualmente utilizado com arrays. Ele pega cada item do array para visualização em tela. Vejamos alguns exemplos:</p>";
                 $exemplo_de_array = [1,2,3,17];

                 foreach ($exemplo_de_array as $algo){
                  echo "$algo -";
                 }
                 echo "<p></p>";
                echo "<p>O manual do PHP fala que o <strong>include</strong> e <strong>required</strong> também são Estruturas de controle. Elas servem para incorporar no código atual, outro arquivo php de seu interesse, por exemplo: Você esta trabalhando no arquivo index.php e precisa de um código que está no arquivo configura.php por exemplo. Use o exemplo abaixo na index.php para que o index use o codigo de outro arquivo. Irá ser exibido um erro, pois o arquivo que eu pedi para incluir não existe.</p>";             
                include ("configura.php");  
                echo "<p></p>"; 

                echo "O <strong>Switch Case</strong> é bem simples de usar e entender. Ideal para criar menus, calculadoras simples como no exemplo abaixo e oque mais a imaginação permitir.";
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
                

                ?>
                                
              </div>
            </div>
          </div>





          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Introdução ao Try Catch
                </h5>
                
                <?php

                echo "<p>O Try Catch é um recurso para tratar erros do php. Caso seja encontrado algo no código que retorna um <strong>ERRO FATAL</strong>, todo o resto do código é interropido, prejudicando a visibilidade e navegação da pagina. Usando o Try o erro é tratado com uma mensagem mais amigavel ao usuário e o sistema continua operando mesmo após o erro. Veja o exemplo abaixo onde forçando a divisão de um numero por zero, causando um erro fatal.</p>"; 
                
                

                try {
                    
                    $resultado = 10 / 0;
               } catch (DivisionByZeroError $e) {
                    echo "Erro Fatal: " . $e->getMessage();
                    
                }
                echo "<p></p>";
                //division by zero error é um erro matematico que sera exibido caso alguem tente dividir algum numero por 0
                //exception pode ser usado para um erro generico
                echo "<p>Aqui continua o restante do código sem ser afetado pelo erro fatal!</p>";
                ?>
                
                
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="detail-box">
                <h5>
                  Funções
                </h5>
                
                <?php
                  echo "<p>Uma <strong>função</strong> é um bloco reutilizavel de código que facilita a programação. Você pode criar várias funções e chama-las sempre que precisar dentro do seu código. Abaixo um exemplo de função que se chama mostra_nome e recebe dois parametros: nome e sobre nome. Toda vez que chamar a função e incluir nela os parametros, será exibido na tela a frase contida em echo:</p>";

                  function mostra_nome($nome,$sobre_nome){
                    echo "<p>Seu nome é: $nome e seu sobre nome é: $sobre_nome</p>";
                  }

                  echo mostra_nome("Roberto", "Dantas");
                  echo "<p></p>";

                  echo "<p>Você pode definir quantos parametros quiser na criação de uma função. Use a criatividade. Abaixo agora um exemplo de função que recebe 3 numeros como parametros e retorna o resultado de um calculo:</p>";

                  function calc($a,$b,$s){
                    $calc=($a+$b)/$s;
                    return $calc;
                  }

                  echo "O resultado é: " . calc(15,15,3);
                  
                  ?>
                
                
              </div>
            </div>
          </div>


          <div class="col-md-4 ">
            <div class="box ">
              <div class="detail-box">
                <h5>
                  Integrações de HTML com PHP
                </h5>
                <p>Na integração de php com html, usa-se muito formulários, onde os dados contidos são pegos pelo php no metodo GET ou POST. Abaixo um exemplo de formulário que tem dois campos: Nome e Email usando o metodo GET. Ao clicar em enviar o GET pega os dados e coloca após o nome do arquivo que está sendo usado. Se você manteve os nomes dos arquivos deste material, deve estar sendo exibido no seu navegador: localhost/aprendizadophp/basico.php. Veja no navegador como esta antes de preencher o formulário e veja depois de clicar em enviar como o metodo GET funciona.</p>

                <form action="basico.php" method="get">
                  <p>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome">
                  </p>

                  <p>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                  </p>

                  <p><button type="submit">Enviar</button></p>
                </form>
                
                <p>
                  <?=
                  $nome = filter_input(INPUT_GET,"nome") ?? "";
                                 echo "<p>Seu nome é: $nome</p>";
                  
                                 echo "<p>Em php existem variáveis que se chamam variáveis globais. São variáveis pré definidas que trazem recursos já prontos. Abaixo o exemplo de uma variável global que se chama _SERVER e trazendo um de seus recursos, o REQUEST_URI. O REQUEST_URI serve para mostrar na tela o caminho atual do arquivo que está sendo trabalho. Abaixo um exemplo deste recurso:</p>";   
                  
                                 echo "<p>Mostrando a URL: " . $_SERVER["REQUEST_URI"] . "</p>";
                  ?>
                </p>
                
                
              </div>
            </div>
          </div>

          <div class="col-md-4 ">
            <div class="box ">
              
              <div class="detail-box">
                <h5>
                  Formulário
                </h5>
                <p>Neste exemplo vou usar um formulário com validação que verifica se os campos estão preenchidos e se email é válido, usando filtros de segurança para evitar a insersão de códigos maliciosos.</p>
                <p>

                <form method="get" action="basico.php">
                  <p>
                    <label for="nome" id="nome">Nome:</label>
                    <input type="text" id="nome" name="nome">
                  </p>
                  
                  <p>
                    <label for="email" id="email">Email:</label>
                    <input type="text" id="email" name="email">
                  </p>
                  
                  <p><button type="submit">Enviar</button></p>
                </form> 
                 
                  <?php

                  echo "<p>O exemplo de validação abaixo verifica se nome e email é não vazio, se for vazio uma mensagem pedindo para preencher os campos é exibida, se for não vazio ele pula para proxima linha. Na proxima linha uma variável recebe o GET do nome e faz um tratamento de strings para ser exibido corretamente no html. Na proxima linha a variável que recebe o email, precisa de dois filtros para validação. Primeiro o FILTER_SANITIZE_EMAIL lê os strings e ve se o que foi digitado é um email válido, verificando se há @ e .com coisas do tipo, e depois a verificação é feita com IF se o email é valido chamando o resultado do filtro. Se é um email válido será exibido na tela Dados válidos, se não for, uma mensagem informando que o email não foi digitado corretamente.</p>";

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
                    echo "<p><strong>Preencha os campos para continuar</strong></p>";
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
                 Introdução a Cookies
                </h5>
                <p>
                  <strong>Sobre Cookies</strong>
                </p>
                  <?php
                  echo "<p>Cookies são pequenos arquivos que armazem dados temporários na navegação de um site. Usar Cookie quando:</p>";
                  echo "<p>Precisar de lembrar login (se usuário permtir).</p>";
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
                <p>Para este aprendizado esta sendo utilizado o XAMPP que já vem com Mysql integrado. Basta abrir o terminal do MariaDB, antigo Mysql e dar os comandos abaixo para criar seu primeiro banco de dados:</p>
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