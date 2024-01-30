<?php
require_once("../model/conexao.php");
require_once("../model/bancoCliente.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);


if(adicionarCliente($conexao,$nomeCliente,$foneCliente,$cpfCliente)){
echo("As informações do Cliente foram salvas");

}else{
echo("Alerta!!! As informações do Cliente Não foram salvas");
}

?>