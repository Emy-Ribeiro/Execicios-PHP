<?php

$categorias = [];
$categorias[]= 'infantil';
$categorias[]='adolescente';
$categorias[]='adulto';
//print_r(categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if ($idade >=5 && $idade <=12) {
    for ($i=0; $i <= count($categorias); $i++) { 

		if ($categorias[$i] == 'infantil' ) {
			echo "O(a) nadador(a) ".$nome." compete na categoria infantil";
		}
	}
}

else if ($idade >=13 && $idade <=17) {
	for ($i=0; $i <= count($categorias); $i++) { 

		if ($categorias[$i] == 'adolescente' ) {
			echo "O(a) nadador(a) ".$nome." compete na categoria adolescente";
		}
	}
}

else {
	for ($i=0; $i <= count($categorias); $i++) { 

		if ($categorias[$i] == 'adulto' ) {
			echo "O(a) nadador(a) ".$nome." compete na categoria adulto";
		}
	}
}