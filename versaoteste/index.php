<!DOCTYPE html>
<!-- saved from url=(0050)http://themeforces.com/demo/freebies/tf-free-no.3/ -->
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SmartPeople - Agregador Temático de Redes Sociais (Facebook, Linkedin)</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">

        <!-- Slider -->
        <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" media="screen">

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

        <link href="css/css" rel="stylesheet" type="text/css">
        <link href="css/css(1)" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="js/modernizr.custom.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        //Inicia sess�o
        session_start();
        //Liga ao sistema de bases de dados e escolhe a base de dados
        $liga = mysqli_connect('localhost', 'adminsmartpeople', 'smartpeople');
        mysqli_select_db($liga, 'registos');
        //Menu Navigation 
        if (isset($_SESSION['mailsmartpeople']) == 1) {
            echo'<nav id = "tf-menu" class = "navbar navbar-default navbar-fixed-top">';
            echo '<div class = "container">';
            //Brand and toggle get grouped for better mobile display
            echo'<div class = "navbar-header" style = "background-color: #ffffff;">';
            echo'<button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#bs-example-navbar-collapse-1">';
            echo'<span class = "sr-only">Toggle navigation</span>';
            echo'<span class = "icon-bar"></span>';
            echo'<span class = "icon-bar"></span>';
            echo'<span class = "icon-bar"></span>';
            echo'</button>';
            echo'<a clas1s = "page-scroll" href = "#tf-home"><img src = "img/logo-smart_people1.png" /></a>';
            echo'</div>';
            echo '<!--Collect the nav links, forms, and other content for toggling -->';
            echo'<div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">';
            echo'<ul class = "nav navbar-nav navbar-right">';
            echo'<li class = "active"><a href = "#tf-home" class = "page-scroll">Início</a></li>';
            echo'<li><a href = "#tf-about" class = "page-scroll">Sobre</a></li> <!--#tf-about mudar para #inicio -->';
            echo'<li><a href = "#tf-team" class = "page-scroll">Equipa</a></li> <!--#tf-about mudar para #equipa -->';
            echo'<li><a href = "#tf-services" class = "page-scroll">Login</a></li> <!--#tf-about mudar para #login -->';
            echo'</ul>';
            echo'</div>';
            echo'<!--/.navbar-collapse -->';
            echo'</div>';
            echo'<!--/.container-fluid -->';
            echo'</nav>';
            echo'<!--Home Page [inicio] -->';
            echo'<div id = "tf-home" class = "text-center">';
            echo'<div class = "overlay">';
            echo'<div class = "content">';
            echo'<h1>Bem vindo ao<strong><span class = "color"> SmartPeople</span></strong></h1>';
            echo'<p class = "lead">Seja o smarter mais fantástico do planeta<strong> Linkedin </strong> e <strong>Facebook</strong></p>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'<!--About Us Page [Sobre] -->';
            echo'<div id = "tf-about">';
            echo'<div class = "container">';
            echo'<div class = "row">';
            echo'<div class = "col-md-6">';
            echo'<img src = "img/social.png" class = "img-responsive">';
            echo'</div>';
            echo'<div class = "col-md-6">';
            echo'<div class = "about-text">';
            echo'<div class = "section-title">';
            echo'<h4>Sobre n�s</h4>';
            echo'<h2>O que é o<strong> SmartPeople?</strong></h2>';
            echo'<hr>';
            echo'<div class = "clearfix"></div>';
            echo'</div>';
            echo'<p class = "intro">É um agregador temático de redes sociais(Linkedin, Facebook) que lhe permite tirar partido de uma só rede. O utilizador da Smartpeole está na sua rede social(smartpeolple) e intervêm e visualiza as outras redes sociais de uma maneira prática, simples e eficiente.</p>';
            echo'<ul class = "about-list">';
            echo'<li>';
            echo'<span class = "fa fa-thumbs-o-up"></span>';
            echo'<strong>Likes</strong> - <em>faça likes nas redes sociais (Linkedin, Facebook)</em>';
            echo'</li>';
            echo'<li>';
            echo'<span class = "fa fa-comment-o"></span>';
            echo'<strong>Comentários</strong> - <em>faça comentários nas redes sociais (Linkedin, Facebook)</em>';
            echo'</li>';
            echo'<li>';
            echo'<span class = "fa fa-share-square-o"></span>';
            echo'<strong>Partilhas</strong> - <em>faça partilhas nas redes sociais (Linkedin, Facebook)</em>';
            echo'</li>';
            echo'<li>';
            echo'<span class = "fa fa-mobile"></span>';
            echo'<strong>Aplicação Mobile</strong> - <em>faça o download da nossa aplicação <a href = "#">aqui</a>.</em>';
            echo'</li>';
            echo'</ul>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';

            echo'<!--Team Page [Equipa] -->';
            echo'<div id = "tf-team" class = "text-center">';
            echo'<div class = "overlay">';
            echo'<div class = "container">';
            echo'<div class = "section-title center">';
            echo'<h2>A nossa <strong>equipa</strong></h2>';
            echo'<div class = "line">';
            echo'<hr>';
            echo'</div>';
            echo'</div>';
            echo'<div id = "team" class = "owl-carousel owl-theme row" style = "opacity: 1; display: block;">';
            echo'<div class = "owl-wrapper-outer autoHeight" style = "height: 330px;">';
            echo'<div class = "owl-wrapper" style = "width: 4560px; left: 0px; display: block; -webkit-transition: all 0ms ease; transition: all 0ms ease;">';
            echo'<div class = "owl-item" style = "width: 285px;">';
            echo'<div class = "item">';
            echo'<div class = "thumbnail">';
            echo'<img src = "img/vasco.jpg" alt = "Vasco Marques" class = "img-circle team-img">';
            echo'<div class = "caption">';
            echo'<h3>Vasco Marques</h3>';
            echo'<p>Developer</p>';
            echo'<p>Engenharia Informática</p>';
            echo'<p>Do not seek to change what has come before. Seek to create that which has not.</p>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "owl-item" style = "width: 285px;"><div class = "item">';
            echo'<div class = "thumbnail">';
            echo'<img src = "img/raul.jpg" alt = "Raul Santos" class = "img-circle team-img">';
            echo'<div class = "caption">';
            echo'<h3>Raul Santos</h3>';
            echo'<p>Developer</p>';
            echo'<p>Engenharia Informática</p>';
            echo'<p>Do not seek to change what has come before. Seek to create that which has not.</p>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "owl-item" style = "width: 285px;"><div class = "item">';
            echo'<div class = "thumbnail">';
            echo'<img src = "img/paulo.jpg" alt = "Paulo Santos" class = "img-circle team-img">';
            echo'<div class = "caption">';
            echo'<h3>Paulo Santos</h3>';
            echo'<p>Manager</p>';
            echo'<p>Engenharia Informática</p>';
            echo'<p>Do not seek to change what has come before. Seek to create that which has not.</p>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'<!--/Team Page [Equipa] -->';

            echo'<!--Login Section Form [Login] -->';
            echo'<div id = "tf-services" class = "text-center">';
            echo'<div class = "container">';
            echo'<div class = "section-title center">';
            echo'<h2>Entrar na <strong>Smart People</strong></h2>';
            echo'<div class = "line">';
            echo'<hr>';
            echo'</div>';
            echo'<div class = "clearfix"></div>';
            echo'</div>';

            echo'<form>';
            echo'<div class = "row">';
            echo'<div class = "col-md-6">';
            echo'<div class = "form-group">';
            echo'<label for = "exampleInputEmail1">Email address</label>';
            echo'<input type = "email" class = "form-control" id = "exampleInputEmail1" placeholder = "Email">';
            echo'</div>';
            echo'</div>';
            echo'<div class = "col-md-6">';
            echo'<div class = "form-group">';
            echo'<label for = "exampleInputPassword1">Password</label>';
            echo'<input type = "password" class = "form-control" id = "exampleInputPassword1" placeholder = "Password">';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'<button type = "submit" class = "btn tf-btn btn-default">Entrar</button>';
            echo'</form>';
            echo'<div class = "section-title center">';
            echo'<div class = "clearfix"></div>';
            echo'<div class = "section-title center">';
            echo'<h2>OU <strong>Criar Conta</strong></h2>';
            echo'<div class = "line">';
            echo'<hr>';
            echo'</div>';
            echo'<div class = "clearfix"></div>';
            echo'<div class = "row">';
            echo'<div class = "section-title center">';
            echo'<!--Large modal -->';
            echo'<button type = "button" class = "btn btn-success btn-lg btn-default" data-toggle = "modal" data-target = "#myModal">REGISTE-SE AQUI!</button>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'<!--/Login Form [Login] -->';

            echo'<!--Modal -->';
            echo'<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">';
            echo'<div class = "modal-dialog">';
            echo'<div class = "modal-content">';
            echo'<div class = "modal-header">';
            echo'<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;';
            echo'</span></button>';
            echo'<h4 class = "modal-title" id = "myModalLabel">Registo</h4>';
            echo'</div>';
            echo'<div class = "modal-body">';
            echo'<form role = "form">';
            echo'<div class = "well well-sm"><strong><span></span> Preencha todos os campos.</strong></div>';
            echo'<div class = "form-group">';
            echo'<div class = "input-group">';
            echo'<input type = "text" class = "form-control" name = "InputName" id = "InputName" placeholder = "Nome" required>';
            echo'<span class = "input-group-addon"><span class = "glyphicon glyphicon-user"></span></span>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "form-group">';
            echo'<div class = "input-group">';
            echo'<input type = "email" class = "form-control" id = "InputEmailFirst" name = "InputEmail" placeholder = "Email SmartPeople" required>';
            echo'<span class = "input-group-addon"><span class = "glyphicon glyphicon-envelope"></span></span>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "form-group">';
            echo'<div class = "input-group">';
            echo'<input type = "password" class = "form-control" id = "InputEmailFirst" name = "InputEmail" placeholder = "Password SmartPeople" required>';
            echo'<span class = "input-group-addon"><span class = "glyphicon glyphicon-lock"></span></span>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "form-group">';
            echo'<div class = "input-group">';
            echo'<input type = "email" class = "form-control" id = "InputEmailFirst" name = "InputEmail" placeholder = "Email Facebook" required>';
            echo'<span class = "input-group-addon"><span class = "glyphicon glyphicon-envelope"></span></span>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "form-group">';
            echo'<div class = "input-group">';
            echo'<input type = "password" class = "form-control" id = "InputEmailFirst" name = "InputEmail" placeholder = "Password Facebook" required>';
            echo'<span class = "input-group-addon"><span class = "glyphicon glyphicon-lock"></span></span>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "form-group">';
            echo'<div class = "input-group">';
            echo'<input type = "email" class = "form-control" id = "InputEmailFirst" name = "InputEmail" placeholder = "Email Linkedin" required>';
            echo'<span class = "input-group-addon"><span class = "glyphicon glyphicon-envelope"></span></span>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "form-group">';
            echo'<div class = "input-group">';
            echo'<input type = "password" class = "form-control" id = "InputEmailFirst" name = "InputEmail" placeholder = "Password Linkedin" required>';
            echo'<span class = "input-group-addon"><span class = "glyphicon glyphicon-lock"></span></span>';
            echo'</div>';
            echo'</div>';
            echo'<div class = "form-group">';
            echo'<div class = "input-group">';
            echo'<label for = "InputEmail">Escolha a sua fotografia e submete-a: </label><p></p>';
            echo'<span class = "btn btn-success fileinput-button dz-clickable">';
            echo'<i class = "glyphicon glyphicon-plus"></i>';
            echo'<span>Adicionar foto</span>';
            echo'</span>';
            echo'</div>';
            echo'</div>';
            echo'</form>';
            echo'<div class = "modal-footer">';
            echo'<button type = "button" class = "btn btn-default" data-dismiss = "modal">Fechar</button>';
            echo'<input type = "submit" name = "submit" id = "submit" value = "Submeter" class = "btn btn-primary">';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';

            echo'<!--Footer [Rodapé] -->';
            echo'<nav id = "footer">';
            echo'<div class = "container">';
            echo'<div class = "pull-left fnav">';
            echo'<p>COPYRIGHT © 2015. Designed by <a href = "#">Smart People</a> and Coded by <a href = "#">Vasco Marques & Raul Santos</a></p>';
            echo'</div>';
            echo'<div class = "pull-right fnav">';
            echo'<ul class = "footer-social">';
            echo'<li><a href = "https://www.facebook.com/SmartPeopleIPT?ref=hl"><i class = "fa fa-facebook"></i></a></li>';
            echo'<li><a href = "#linkedin"><i class = "fa fa-linkedin"></i></a></li>';
            echo'<li><a href = "#google-plus"><i class = "fa fa-google-plus"></i></a></li>';
            echo'<li><a href = "#twitter"><i class = "fa fa-twitter"></i></a></li>';
            echo'</ul>';
            echo'</div>';
            echo'</div>';
            echo'</nav>';
        } else {
            //caso n�o esteja autenticado
            echo 'Esta � uma �rea reservada a utilizadores registados.';
        }
        ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.1.11.1.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.js"></script>
        <script src="js/owl.carousel.js"></script>

        <!-- Javascripts -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>