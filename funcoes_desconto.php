<?php

    require_once ("funcoes_desconto.php");

    $valor_total = 800;
    $desconto = 10;

    $valor_total_com_desconto = calcula_desconto($valor_total, $desconto);
?>

Valor total: R$ <?php echo $valor_total ?> <br>
Valor desconto R$ <?php echo $desconto ?>% <br>
Valor total com desconto: R$ <?php $valor_total_com_desconto ?>
