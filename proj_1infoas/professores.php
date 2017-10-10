<?php
//CONTEM FUNCOES PARA ACESSO E MANIPULAÇÃO DOS DADOS DE PROFESSORES


function buscaProfessor($codigo){
	$professor = array();
//abrir arquivo
	$dados = file("dados/professores.csv");
//percorrer
	foreach ($dados as $linha) {
		$colunas = explode(",",$linha);
		if($colunas[0]==$codigo){
			$professor['siape'] = $colunas[0];
			$professor['nome'] = $colunas[1];
			$professor['email'] = $colunas[2];
			$professor['foto'] = $colunas[3];
		}
	}




	return $professor;
}

/* TESTE
$p1 = buscaProfessor(2365317);
	
print_r($p1);
//PARA MOSTRAR UM DADO ESPECIFICO PODE- SE COLOCAR : print_($p1['nome']);

*/


	function listaProfessores(){
		$professores=array();
		//abrir arquivo
		$dados = file("dados/professores.csv");
		//percorrer
		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			$professor['siape'] = $colunas[0];
			$professor['nome'] = $colunas[1];
			$professor['email'] = $colunas[2];
			$professor['foto'] = $colunas[3];

			$professores[]= $professor;
		}
		return $professores;
	}
$lista = listaProfessores();
print_r($lista);

?>