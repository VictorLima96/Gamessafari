<?php
function adicionarCliente($conexao,$nomeCliente,$foneCliente,$cpfCliente){
    $query = "insert into gamestb(nomeCliente,foneCliente,CpfCliente)values('{$nomeCliente}','{$foneCliente}','{$cpfCliente}')";
    return mysqli_query($conexao,$query);
}

function buscarClienteNome($conexao,$nomeCliente){
    $query = "Select * from gamestb where nomeCliente like '%{$nomeCliente}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function buscarClienteID($conexao, $idCliente){
    $query = "Select * from gamestb where idCliente = '{$idCliente}'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}

function alterarCliente($conexao,$idCliente,$nomeCliente,$foneCliente,$cpfCliente){
    $query = "update gamestb set nomeCliente='{$nomeCliente}', 
    foneCliente='{$foneCliente}',cpfCliente='{$cpfCliente}' where idCliente = '{$idCliente}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function deletarCliente($conexao,$idCliente){
    $query = "Delete from gamestb where idCliente = '{$idCliente}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}