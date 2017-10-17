<?php
	
	include("cabecalho.php");

	include("professores.php");
//a funcao retorna um array contendo professores
	$lista = listaprofessores();

	foreach ($lista as $professor) {
		echo ('<div class="professor">');
		echo('<img src="'.$professor['foto'].'">');
		echo ('<a href="detalhaProfessor.php?cod='.$professor['siape'].'">'.$professor['nome'].'</a>');
		echo ('</div>');
	}

	include("rodape.php");

?>