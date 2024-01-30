<?php
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");

extract($_REQUEST,EXTR_OVERWRITE);

buscarClienteNome($conexao,$nomeCliente);

header("Location: ../view/buscar.php");
?>