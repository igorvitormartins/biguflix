# biguflix
Com a necessidade de várias pessoas em minha casa precisarem assistir conteúdos diferentes simultaneamente,
Desenvolvi um programa rápido e simples para que qualquer usuário que tenha um dispositivo que está conectado a minha rede local, possa consumir o conteúdo fornecedido apenas acessando o navegador.
Este projeto roda em minha residência, o servidor é um raspberry pi que está servindo apache e samba(arquivos).

Por decisão própria decidir realizar sem banco de dados;

### Add bootstrap in the main directory apache
### For that application is need create an ALIAS in APACHE setup. For work a server of files (videos and pics) and other server apache.

##### Código compatível com PHP 5 ou superior
##### Como solução de ACESSO a arquivos fora da pasta raíz da aplicação, deve ser criado um ALIAS nas configurações do APACHE "httpd.conf"
```terminal

# Alias /webpath /full/filesystem/path
  Alias /eds-modules "C:/EasyPHP-Devserver-17/eds-modules"
  Alias /files-teste "C:\Users\igor.martins\Documents\teste"

```
```terminal

</Directory>
	<Directory "C:\Users\igor.martins\Documents\files-teste">
        Options FollowSymLinks Indexes
        AllowOverride All
        Order allow,deny
        Allow from 127.0.0.1
        Allow from all
		Require all granted		
    </Directory>
```
##### no arquivo menu.php deverá ser informado o link do ALIAS criado
```php
$alias = "http://127.0.0.1:8080/files-teste/";
```
##### no arquivo biblioteca.php deverá ser editado variaveis conforme sua definição
```php
$caminho_file = str_replace("C:/Users/igor.martins/Documents/teste/", "http://127.0.0.1:8080/files-teste/", $caminho);
```
##### no arquivo search.php deverá ser editado variaveis conforme sua definição
```php
  $path1 = "C:/Users/igor.martins/Documents/teste/";
	
	$diretorio1 = dir($path1);
	$fileson = "C:/Users/igor.martins/Documents/teste/";
	$alias = "http://127.0.0.1:8080/files-teste/";
```

##### Edição e Criação de novos usuários, deverá ser editado arquivo valida.php, editar os arrays:
```php

  $users= array("FULANO", "MARIA", "JOÃO", "PEDRO");
  $passwords= array("456", "123", "123", "123");

  //Cada posição do array $passwords está relacionado a posição do array $users
```


###### Os conteúdos deverão ser armazenado nas suas devidas pastas: Gênero/ Filme(Série)/ descrption.txt, image.jpg, video.mp4 e legenda.txt
### Desenvolvimento Futuro:
* Melhoria no CSS da página;
* Aquisição de HD externo e realocação de mídias neste diretório;
* Melhorias no código;

###### Links relacionados:
[Apache](https://br.atsit.in/archives/78030)
[Samba](https://www.arduinoecia.com.br/como-instalar-samba-raspberry-pi/)
[PHP](https://www.php.net/)
