<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	
  <body style="background-color:#000000;">
	
        <main>
		<br>
		
		<div class="container">
			<div class="row">
				<p>
			  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Missão</a>
			  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Política da Qualidade</button>
			  
			</p>
			<div class="row">
			  <div class="col">
				<div class="collapse.show multi-collapse" id="multiCollapseExample1">
				  <div class="card card-body">
					Desenvolver novas tecnologias e soluções para o mercado brasileiro de Telecomunicações e Energia que terão papéis vitais na vida das pessoas.
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="collapse.show multi-collapse" id="multiCollapseExample2">
				  <div class="card card-body">
					A Tellescom, empresa fabricante de equipamentos transmissores de comunicação, cumprindo com os requisitos aplicáveis, incentiva a melhoria contínua do seu sistema de gestão da qualidade com foco estratégico na satisfação dos seus clientes e na liderança no mercado.
				  </div>
				</div>
			  </div>
			</div>
			</div>
			<br>
			
			<div class="btn-group dropright">
			  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Clique Aqui e Escolha o Gênero
			  </button>
			  <div class="dropdown-menu">
				<?php
					
					//$path = "files-biguflix\";
					//$path = "C:/Users/igor.martins/Documents/files/";
					//$alias = "http://127.0.0.1:8080/files-biguflix/";
					$path = "C:/Users/igor.martins/Documents/teste/";
					$alias = "http://127.0.0.1:8080/files-teste/";
					//$path = $alias;
					$diretorio = dir($path);
					while($arquivo = $diretorio -> read()){
						if($arquivo != "." and $arquivo != ".."){
							$station = "<a href='".$path.$arquivo."'>".$arquivo;
							$caminho = $path.$arquivo;
							echo "<a class='dropdown-item' href='biblioteca.php?modelo=$caminho&arquivo=$arquivo'>$arquivo</a>
							";
						}
					}
				?>
				
			  </div>
			  
			</div>
			
				<br><br>
				<center>
					<figure>
						<img src="icon/logo.jpg" alt="LOGOTIPO">
						<figcaption></figcaption>
					</figure>
				</center>
		</div>
		</main>
	</body>
</html>
    
	
