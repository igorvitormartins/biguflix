<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com.br/docs/4.1/examples/dashboard/ -->

<?php
	if(isset($_GET['modelo']) and isset($_GET['arquivo'])){
		$modelo = $_GET['modelo'];
		$arquivo = $_GET['arquivo'];
		$arquivo2 = $arquivo;
		$conteudo = $arquivo;
	}else{
		header('Location: template.php');
	}
	if($modelo != ''){
		$modelo = $_GET['modelo'];
	}else{
		header('Location: template.php');
	}

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
	  <a class="navbar-brand" href="#">Catálogo: <?php echo $arquivo ?></a>
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
					
					//
					//echo $modelo;
					$path = $modelo."/";
					$diretorio = dir($path);
					
					//href='tabelas/documentos_equipamento.php?serial=$serie
					
					
					//FIM DA FUNCAO PARA LER ARQUIVO DE DESCRICAO txt.

					
					while($arquivo = $diretorio -> read()){
						
						while($arquivo = $diretorio -> read()){
							
							if($arquivo != "." and $arquivo != ".." and $arquivo != "0. image" and $arquivo != "description.txt"){
								//$station = "<a href='".$path.$arquivo."'</a>".$arquivo;
								$station = $arquivo;
								$caminho = $path.$arquivo;
								
								//FUNCAO PARA LER ARQUIVO DE DESCRICAO txt.
								$arquivo = $caminho.'/description.txt';
								if(file_exists($arquivo)){
									$handle = fopen( $arquivo, 'r' );
									$ler = fread( $handle, filesize($arquivo) );
									fclose($handle);
								}
								
								
								
								
								$caminho_file = str_replace("C:/Users/igor.martins/Documents/teste/", "http://127.0.0.1:8080/files-teste/", $caminho);
								$video = $caminho_file.'/video.mp4';

								echo "<div class='col-md-4' id='cardsapp'>
										<div class='card mb-4'>
											<img class='card-img-top' src='$caminho_file/image.jpg' alt='Imagem de capa do card'>
											<div class='card-body'>
											<h5 class='card-title'><b>$station</b></h5>
											<p class='card-text'>$ler</p>
											<br><a href='player.php?station=$caminho&modelo=$modelo&arquivos2=$video&conteudo=$conteudo' class='btn btn-primary'>Assistir</a>
											<p class='card-text'><small class='text-muted'></small></p>
											</div>
										</div>
									</div>";
							}
						}
					}
					
					$diretorio -> close();
					
				?>
				
			</div>		
		</div>
        </main>
      </div>
    </div>
</body></html>
    
