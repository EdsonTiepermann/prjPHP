<?php

    //verifica se a variável está iniciada
    $valor = "edson";
    isset($valor);

    // retorna true quando = '',0, '0', false, null, array()
    // false = outras condições
    $valor = '';
    empty($valor);

    //verifica se a variável é um número
    $valor = 0;
    is_numeric($valor);


?>