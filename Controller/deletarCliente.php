<?php
require_once("../model/conexao.php");
require_once("../model/bancoCliente.php");
include_once("../view/header.php");

extract($_REQUEST, EXTR_OVERWRITE);


if (deletarCliente($conexao, $idCliente)) {
    echo ("As informações do Cliente foram excluidas com sucesso.");
} else {
    echo ("Alerta!!! As informações do Cliente Não foram excluidas");
}
