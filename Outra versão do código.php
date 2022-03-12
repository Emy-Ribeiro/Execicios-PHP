<?php

  $categorias = [
    'infantil'    => [5, 12],
    'adolescente' => [13, 17],
    'adulto'      => [18, 100]
  ];

  $nome  = $_POST['nome'];
  $idade = $_POST['idade'];

  if ($idade < 5 || $idade > 100) {
    die("A idade do(a) atleta " . $nome . " está fora do intervalo aceitável para competir.");
  }

  foreach ($categorias as $category => $range) {
    if ($idade >= $range[0] && $idade <= $range[1]) {
      echo "O(a) nadador(a) " . $nome . " compete na categoria $category";
    }
  }