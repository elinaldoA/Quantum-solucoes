<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quantum || Buscar</title>
    <meta name="description" content="Matrix soluções TI">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">
    <!--Caminho do favicon.ico no diretorio raiz-->

    <!--Todos os Css-->
    <!--bootstrap v3.3.7 css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Animação do css-->
    <link rel="stylesheet" href="../css/animate.css">
    <!--owl.carousel.2.0.0-beta.2.4 css-->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="../css/slicknav.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- modernizr css -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloder-wrap">
            <div class="loader">
                <div class="child-common child4"></div>
                <div class="child-common child3"></div>
                <div class="child-common child2"></div>
                <div class="child-common child1"></div>
            </div>
        </div>
    <!-- preloder-wrap -->
        <!-- search-area -->
        <div class="search-area">
            <span class="closs-btn">Close</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="buscar" id="buscar" placeholder="O que você procura?">
                                <button type="button" name="button" class="btn-style"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area -->
    <!-- começo da área heared -->
    <header class="header-area">
            <div class="header-top bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                <p>Conheça a Quantum: Assessoria contábil completa, mais tranquilidade e segurança para o seu negócio.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="header-top-right text-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="header-middle bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="logo">
                        <h1><a href="index.html"><img src="img/logo.png" height="100" width="150" /></a></h1>
                    </div>
                </div>
                <div class="col-md-9 col-sm-4">
                    <div class="header-middle-right">
                        <ul>
                            <li>
                                <div class="contact-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="contact-info">
                                    <p>Segunda - Quinta (08hs às 18hs)</p>
                                    <p>Sexta (08hs às 17hs)</p>
                                    <span>Sábados - Fechado</span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <p>Email</p>
                                    <span>comercial@quantum-es.com.br</span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <p>Telefone</p>
                                    <span>(27) 3038-7755</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom"  id="sticky-header">
        <div class="container">
        <div class="row">
        <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
        <div class="logo">
        <h1><a href="index.html"><img class="img-responsive" src="img/logo.png" height="100" width="150" /></a></h1>
        </div>
        </div>
        <div class="col-md-11 hidden-sm hidden-xs">
        <div class="mainmenu">
                <ul id="navigation">
                <li><a href="index.html">Home</a></li>
                <li><a href="empresa.html">Empresa</a></li>
                <li><a href="#">Serviços<i class="fa fa-angle-down"></i></a>
                <ul class="submenu">
                    <li><a href="registro.html">Registro</a></li>
                    <li><a href="irpf.html">Irpf</a></li>
                    <li><a href="expedicao.html">Expedição</a></li>
                    <li><a href="abertura-fechamento.html">Abertura & fechamento</a></li>
                    <li><a href="fiscal.html">Fiscal</a></li>
                    <li><a href="auditoria.html">Auditoria</a></li>
                    <li><a href="contabil.html">Contábil</a></li>
                    <li><a href="simples.html">Simples</a></li>
                    <li><a href="pessoal.html">Pessoal</a></li>
                </ul>
                </li>
                <li><a href="downloads.html">Downloads</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="curriculo.php">Trabalhe conosco</a></li>
                <li class="active"><a href="area-restrita.html">Área do cliente</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-1 col-sm-2 col-xs-3">
        <div class="search-wrap text-right">
            <ul>
                <li>
                    <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
    <div class="responsive-menu-wrap floatright"></div>
    </div>
    </div>
    </div>
    <!-- Fim do botão de busca -->
    <!--Seção de Blog-->
	<!-- blog-details-area start -->
        <section class="blog-details-area ptb-140">
            <div class="container">
                <h2 class="text-title text-center">Blog</h2>
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <?php

                        $buscar = $_POST['buscar'];

                        $result = "SELECT * FROM post WHERE categoria LIKE '%$buscar%' LIMIT 5";
                        $resultado = mysqli_query($conectar,$result);
                        if ($linhas = mysqli_fetch_array($resultado)) {
                          echo "<section class='blog-details-area ptb-140'>";
                          echo "<div class='container'>";
                          echo "<div class='row'>";
                          echo "<div class='col-md-8 col-xs-12'>";
                          echo "<div class='blog-details-wrap'>";
                          echo "<div class='blog-details-img'>";
                          echo "<img src='Blog/imagens/".$linhas['imagem']."'>";
                          echo "<div class='blog-details-content'><br />";
                          echo "<h3>".$linhas['titulo']."</h3>";
                          echo "<p>".$linhas['conteudo_completo']."</p>";
                          echo "<footer>";
                          echo "<span class='entry-author'><i class='fa fa-pencil'></i> " . $linhas['autor'] ." </span>";
                          echo "<span class='entry-category'><i class='fa fa-folder-o'></i> " .$linhas['categoria']. "</span>";
                          echo "</footer>";
                          echo "<p> Postado em ".date('d-m-Y H:i:s', strtotime($linhas['data']))."</p>";
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";
                          echo "</section>";
                        }else{
                        echo "<section class='blog-details-area ptb-140'>";
                        echo "<div class='container'>";
                        echo"<div class='col-md-8 col-xs-12'>";
                        echo"<h2 class='headline text-warning'> 404</h2>";
                        echo"<div class='error-content'>";
                        echo "<h3><i class='fa fa-warning text-warning'></i> Oops! Página não encontrada.</h3>";
                        echo "<p>
                              Lamentamos, não foi possível encontrar a página que você estava procurando.
                              <br /> <br /><a href='index.html'> <a href='../blog.php'><button class='btn btn-primary btn-sm' value='submit'>Voltar</button></a>
                            </p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</section>";
                        }
                    ?>
                    </div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                            <div class="search-sidebar mb-30">
                                <form action="buscar.php" method="post" enctype="multipart/form-data">
                                    <input type="text" name="buscar" id="buscar" placeholder="O que você procura">
                                    <button type="submit" name="button" id="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="category-wrap mb-30">
                                <h3 class="sidebar-title">Categorias</h3>
                                <ul>
                                    <li><a href="#">Investmentos</a></li>
                                    <li><a href="#">Orçamentos</a></li>
                                    <li><a href="#">Contabilidade</a></li>
                                    <li><a href="#">Irpf</a></li>
                                    <li><a href="#">Legislação</a></li>
                                </ul>
                            </div>
                            <div class="related-post mb-30">
                                <h3 class="sidebar-title">Post relacionados</h3>
                                <ul>
                                    <li class="related-post-items">
                                        <div class="post-img">
                                            <img src="assets/images/post/1.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Adipisicing dolor sit amet consectetur  elit Lorem ipsum dolor</a>
                                            <p>20/05/2019</p>
                                        </div>
                                    </li>
                                    <li class="related-post-items">
                                        <div class="post-img">
                                            <img src="assets/images/post/2.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Sit Lorem ipsum dolor amet adipisicing elit Lorem ipsum dolor</a>
                                            <p>25/05/2019</p>
                                        </div>
                                    </li>
                                    <li class="related-post-items">
                                        <div class="post-img">
                                            <img src="assets/images/post/3.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Dolor sit amet consectetur adipisicing elit Lorem ipsum dolor</a>
                                            <p>30/05/2019</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="archive-wrap mb-30">
                                <h3 class="sidebar-title">arquivos</h3>
                                <ul>
                                    <li><a href="#">November 2018 <span class="pull-right">(25)</span></a></li>
                                    <li><a href="#">August 2018 <span class="pull-right">(25)</span></a></li>
                                    <li><a href="#">September 2018  <span class="pull-right">(25)</span></a></li>
                                    <li><a href="#">Octeber 2018 <span class="pull-right">(25)</span></a></li>
                                    <li><a href="#">December 2018  <span class="pull-right">(25)</span></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
        <!-- Inicio do chatbot -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'XTRwGi3cjf';var d=document;var w=window;function l(){
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
          s.src = '//code.jivosite.com/script/widget/'+widget_id
            ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
          if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
          else{w.addEventListener('load',l,false);}}})();
        </script>
        <!-- Final do chat bot -->
        <!-- Inicio do rodapé -->
    <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 col">
                            <div class="footer-widget footer-logo">
                  <h2>Quantum<br>Soluções empresariais</h2>
                  <p></p>
                    <ul>
                      <li><i class="fa fa-phone"></i> (27) 3038-7755</li>
                      <li><i class="fa fa-envelope"></i> comercial@quantum-es.com.br</li>
                      <li><i class="fa fa-whatsapp"></i>(27) 99902-1724</li>
                    </ul>
                            </div>
                        </div>
            <div class="col-md-3 col-sm-6 col-xs-12 col">
              <div class="footer-widget footer-menu">
                <h2>Menu rodapé</h2>
                  <ul>
                  <li><a href="index.html">Home</a></li>
                    <li><a href="solucoes.html">Serviços</a></li>
                    <li><a href="downloads.html">Downloads</a></li>
                    <li><a href="curriculo.php">Trabalhe conosco</a></li>
                    <li><a href="area-restrita.html">Área do cliente</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 col">
                <div class="footer-widget quick-contact">
                    <h2>Intranet</h2>
                    <form action="intra.php" method="post">
                    <input type="text" name="fname" id="fname" placeholder="Seu nome" required="" />
                    <input type="email" name="email" id="email" placeholder="Seu email" required=""/>
                    <input type="hidden" name="acao" value="enviar" />
                <button id="submit" name="submit" class="btn-style">Logar</button>
                    </form>    
                </div>
            </div>
              <div class="col-md-3 col-sm-6 col-xs-12 col">
              <div class="footer-widget quick-contact">
                <h2>Contate-nos</h2>
                <form action="contate.php" method="post">
                <input type="text" name="fname" id="fname" placeholder="Seu nome" required="" />
                <input type="email" name="email" id="email" placeholder="Seu email" required=""/>
                <textarea name="msg" id="msg" cols="30" rows="10" placeholder="mensagem" required=""></textarea>
                <input type="hidden" name="acao" value="enviar" />
                <button id="submit" name="submit" class="btn-style">Enviar</button>
                </form>
              </div>
            </div>
            </div>
            </div>
            </div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os diretos reservados | <i class="fa fa-desktop"></i> Por Elinaldo Agostinho 
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Rodape do site -->
		<!-- Todos js Aqui -->
		<!-- jquery última versão -->
        <script src="../js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
        <script src="../js/bootstrap.min.js"></script>
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="../js/owl.carousel.min.js"></script>
		<!-- counterup.main.js -->
        <script src="../js/counterup.main.js"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="../js/imagesloaded.pkgd.min.js"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="../js/isotope.pkgd.min.js"></script>
		<!-- jquery.waypoints.min.js -->
        <script src="../js/jquery.waypoints.min.js"></script>
		<!-- jquery.magnific-popup.min.js -->
        <script src="../js/jquery.magnific-popup.min.js"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="../js/jquery.slicknav.min.js"></script>
		<!-- snake.min.js -->
        <script src="../js/snake.min.js"></script>
		<!-- wow js -->
        <script src="../js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="../js/plugins.js"></script>
		<!-- main js -->
        <script src="../js/scripts.js"></script>
</body>
</html>
