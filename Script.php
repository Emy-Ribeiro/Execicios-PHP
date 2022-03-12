<?php

$categorias = [];
$categorias[]= 'infantil';
$categorias[]='adolescente';
$categorias[]='adulto';
//print_r(categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Configuração do formulário
if (empty($nome)) {
	echo "O campo nome não pode ser vazio";
	return;
}

if (strlen($nome) < 3) {
	echo "O nome deve conter mais de 3 caracteres";
	return;
}

if (strlen($nome)> 40) {
	echo "O campo nome não pode ser extenso";
	return;
}

if (!is_numeric($idade)) {
	echo "O campo idade precisa ser um número!";
	return;
}



//Regras  do formulário conforme idade
if ($idade >=5 && $idade <=12) {
    for ($i=0; $i < count($categorias); $i++) { 

		if ($categorias[$i] == 'infantil' ) {
			echo "O(a) nadador(a) ".$nome." compete na categoria infantil";
		}
	}
}

else if ($idade >=13 && $idade <=17) {
	for ($i=0; $i < count($categorias); $i++) { 

		if ($categorias[$i] == 'adolescente' ) {
			echo "O(a) nadador(a) ".$nome." compete na categoria adolescente";
		}
	}
}

else {
	for ($i=0; $i < count($categorias); $i++) { 

		if ($categorias[$i] == 'adulto' ) {
			echo "O(a) nadador(a) ".$nome." compete na categoria adulto";
		}
	}
}