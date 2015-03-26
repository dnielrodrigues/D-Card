<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>D-cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trabalhe Conosco - Fortaleza Moteís">
    <meta name="author" content="Trabalhe Conosco - Fortaleza Moteis">

    <!-- styles -->
    <link href="<?php echo raiz(); ?>/v/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php echo raiz(); ?>/v/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="<?php echo raiz(); ?>/v/css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo raiz(); ?>/v/images/favicon.png">
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"> -->
  </head>

  <body>

<?php
    //MENU TOPO
    if (isset($_SESSION['user'])) { ?>
    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Navegação Alternativa</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo raiz(); ?>" class="navbar-brand">D-Cards</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="<?php echo raiz(); ?>">Meus Decks</a>
            </li>
            <li>
              <a href="<?php echo raiz(); ?>">Criar Novo Deck</a>
            </li>
            <li>
              <a href="<?php echo raiz(); ?>">Perfil</a>
            </li>
            <li>
              <a href="<?php echo raiz(); ?>/autentica/logout">Sair</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="<?php echo raiz(); ?>/sobre">Sobre</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
<?php
  }
  //FIM - MENU TOPO

  //EXIBE ERRO SE EXISTIR
  if (isset($erro)) {
    ?>
    <div class="container">
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $erro; ?>
      </div>
    </div>
    <?php
  }

?>

