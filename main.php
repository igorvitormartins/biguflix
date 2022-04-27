<?php
	session_start();
	if((isset($_SESSION['user']))){
		$userlogin =  $_SESSION['user'];
	}else{
		$_SESSION['loginErro'] = '';
		unset($_SESSION['user']);
		header("Location: index.php");
		
	}

?>


<!DOCTYPE html>
<!-- saved from url=(0068)https://getbootstrap.com.br/docs/4.1/examples/sticky-footer-navbar/? -->
<html lang="pt-br" class="h-100"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Biguflix</title>

	<link rel="stylesheet" href="/css/css/bootstrap.css" >
	<link rel="stylesheet" href="css/style.css" >
	<!-- Principal JavaScript do Bootstrap	-->
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="/js/popper.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
  </head>

  <body class="d-flex flex-column h-100" data-new-gr-c-s-check-loaded="14.1056.0" data-gr-ext-installed="" style="background-color:#000000;">

    <header>
      <!-- Navbar fixa -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?php echo $userlogin; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="?pagina=menu"">Menu <span class="sr-only">(atual)</span></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0" action="search.php" method="post">
            <input class="form-control mr-sm-2" type="text" name="pesquisa"  placeholder="Pesquisa" aria-label="Search" required="required">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
		<ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Sair <span class="sr-only">(atual)</span></a>
			</li>
        </ul>
      </nav>
    </header>

    <!-- Começa o conteúdo da página -->
	<br><br><br><br>
    <main role="main" class="flex-shrink-0">
		<div class="container">
        
      
	  
	  <?php
		  
		  if(isset($_GET['pagina'])){
			  switch($_GET['pagina']){
				  case 'menu':
					include 'menu.php';
				  break;
				  
				  default:
					include 'menu.php';
				  break;
			  }
		
		  }else{
			  include 'menu.php';
		  }
		  
		  ?>
		</div>
    </main>

    <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted">Developer by Igor Vitor @2022</span>
      </div>
    </footer>  

</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>