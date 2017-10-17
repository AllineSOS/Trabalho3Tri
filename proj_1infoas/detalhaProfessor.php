<?php 
	include("cabecalho.php");

	include("professores.php");
	
	$siape = $_GET['cod'];

	$professor = buscaProfessor($siape);
?>

 	<div>
 		<img src="<?=$professor['foto']?>">
 		<h2><?=$professor['nome']?></h2>
 		<p><?=$professor['email']?></p>
 	</div>
<?php
 	include("rodape.php");