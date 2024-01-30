<?php 
require_once("../model/conexao.php");
require_once("../model/bancoCliente.php");
include_once("../view/header.php");

extract($_REQUEST, EXTR_OVERWRITE);


if (alterarCliente($conexao,$idCliente,$nomeCliente,$foneCliente,$cpfCliente)) {
    echo ("As informações do Cliente foram alteradas com sucesso.");
} else {
    echo ("Alerta!!! As informações do Cliente Não foram Alteradas");
}

?>