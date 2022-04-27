<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com.br/docs/4.1/examples/dashboard/ -->
<?php
	$station = $_GET['station'];
	$conteudo = $_GET['conteudo'];
	$i = 0;
	$path = $station;
	$diretorio = dir($path);
	$j = 0;
	$voltarmodelo = $_GET['modelo'];
	$path2 = $voltarmodelo;
	$diretorio2 = dir($path2);
	$arquivos2 = $_GET['arquivos2'];
	$video = $arquivos2;
	
?>



<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biguflix</title>
	
    <link rel="stylesheet" href="/css/css/bootstrap.css" >
	<link rel="stylesheet" href="css/style.css" >
	<!-- Principal JavaScript do Bootstrap	-->
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="/js/popper.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	
  <body style="background-color:#000000;">
	
    <header>
      <!-- Navbar fixa -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"> <?php echo $station;?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            
          </ul>
		  
		  
		  
		  <a class="navbar-brand col-sm-1 col-md-2 mr-0" href="biblioteca.php?modelo=<?php echo $path2?>&arquivo=<?php echo $conteudo?>">Voltar</a>
        </div>
      </nav>
    </header>
		<br><br>
        <main>
			<div class="container-fluid">
				<br><br>
				<center>
				
				<?php
				
					
					if(file_exists($station.'/video.mp4'))
					{
					echo "
					
						
						<video width='900' height='460' controls>
						  <source src='$video' type='video/mp4'>
						  <source src='$path.ogg' type='video/ogg'>
						</center>
					
					";
					}
					else
					{
						
						echo "
							<div class='alert alert-primary' role='alert'>
								Arquivo não se encontra disponível!
							</div>
						";
					
					}
					
					?>
			</div>
        </main>
	
</body></html>