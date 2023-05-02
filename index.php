<?php

include 'Funcionario.php'

$func = new Funcionario();
$func->salarioBruto = 1000;
$func->calculaSalario(120);
$func->mostraSalario();