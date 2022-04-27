<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com.br/docs/4.1/examples/dashboard/ -->

<?php
	session_start();
	//unset($_SESSION['user']);
	//echo $_POST['pesquisa'];
	$search = $_POST['pesquisa'];
	$search = strtoupper($search);
	//DEFINIR CAMINHO PASTA
	$path1 = "C:/Users/igor.martins/Documents/teste/";
	
	$diretorio1 = dir($path1);
	$fileson = "C:/Users/igor.martins/Documents/teste/";
	$alias = "http://127.0.0.1:8080/files-teste/";

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
	
    
	
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-light">
	  <a class="navbar-brand" href="#">Catálogo: <?php echo $search ?></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="textoNavbar">
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item active">
				<a class="nav-link active" href="main.php">MENU</a>
			</li>
		</ul>
		
	  </div>
	</nav>
        <main>
		<div class="container" style="margin-top: 40px">
			<div class="row" >
				<!-- Inicio do loop-->
				<?php
					
					//FIM DA FUNCAO PARA LER ARQUIVO DE DESCRICAO txt.
					$i = 0;
					
					while($path2 = $diretorio1 -> read()){
						if($path2 != '.' and $path2 != '..'){
							$path = $path1.$path2.'/';
							
							//PERCORRE TODOS OS ARQUIVOS DO PATH
							
							$diretorio2 = dir($path);
							while($arquivo = $diretorio2 -> read()){
								if($arquivo != '.' and $arquivo != '..'){
									$nomearquivo = $path.$arquivo;
									
									//$arquivoaliastotal = $pathalias.$arquivo;
									
									//DEFINIR CAMINHO ALIAS PARA ARQUIVO
									$arquivoleitura = $nomearquivo.'/description.txt';
										if(file_exists($nomearquivo)){
											$handle = fopen( $arquivoleitura, 'r' );
											$ler = fread( $handle, filesize($arquivoleitura) );
											fclose($handle);
										}
										$pathalias = str_replace($fileson, $alias, $nomearquivo);
										$video = $pathalias.'/video.mp4';
									
									
									if(strtoupper($arquivo) == $search){
										$i = $i +1;
										//FUNCAO PARA LER ARQUIVO DE DESCRICAO txt.
										
										echo "<div class='col-md-4' id='cardsapp'>
										<div class='card mb-4'>
											<img class='card-img-top' src='$pathalias/image.jpg' alt='Imagem de capa do card'>
											<div class='card-body'>
												<h5 class='card-title'><b>$arquivo</b></h5>
												<p class='card-text'>$ler</p>
												<br><a href='player.php?station=$nomearquivo&modelo=$path&arquivos2=$video&conteudo=$arquivo' class='btn btn-primary'>Assistir</a>
												<p class='card-text'><small class='text-muted'></small></p>
											</div>
										</div>
									</div>";
										
									}
									else if (strpos(strtoupper($arquivo), $search) !== false) {
										$i = $i +1;
										
										echo "<div class='col-md-4' id='cardsapp'>
										<div class='card mb-4'>
											<img class='card-img-top' src='$pathalias/image.jpg' alt='Imagem de capa do card'>
											<div class='card-body'>
												<h5 class='card-title'><b>$arquivo</b></h5>
												<p class='card-text'>$ler</p>
												<br><a href='player.php?station=$nomearquivo&modelo=$path&arquivos2=$video&conteudo=$arquivo' class='btn btn-primary'>Assistir</a>
												<p class='card-text'><small class='text-muted'></small></p>
											</div>
										</div>
									</div>";
									}
								}
								
								
								
							}
							
						}
					}
					
					$diretorio1 -> close();
					$diretorio2 -> close();
					
					if($i < 1){
						
						echo "
						<div class='container-fluid'>
							<center>
								<div class='alert alert-primary' role='alert'>
									Não foi possível encontrar conteúdo para sua pesquisa!
								</div>
							</center>
						</div>
						";
					}else{
						
						echo "
						<div class='container-fluid'>
							<center>
								<div class='alert alert-primary' role='alert'>
									$i arquivo(s) encontrado(s)!
								</div>
							</center>
						</div>
						";
					}
					
				?>
				
			</div>		
		</div>
        </main>
      </div>
    </div>
</body></html>
    
