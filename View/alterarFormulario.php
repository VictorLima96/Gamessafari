<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");

extract($_REQUEST, EXTR_OVERWRITE);

$idCliente = isset($idCliente) ? $idCliente : "";

if ($idCliente) {

    $contatos = buscarClienteID($conexao, $idCliente);
?>

    <div class="container">
        <form class="row g-3" method="Post" action="../Controller/alterarCliente.php">
        <input type="hidden" value="<?php echo ($contatos["idCliente"]); ?>"  name="idCliente">   
        
        <div class="col-md-8">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["nomeCliente"]); ?>" name="nomeCliente" id="inputNome">
            </div>

            <div class="col-md-4">
                <label for="inputFone" class="form-label">Fone</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["foneCliente"]); ?>" name="foneCliente" id="inputFone">
            </div>

            <div class="col-md-6">
                <label for="inputCpf" class="form-label">Cpf</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["cpfCliente"]); ?>" name="cpfCliente" id="inputFone">
            </div>

            <div class="col-12">
                <!-- Button trigger modal -->
                
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </form>
    </div>
    
<?php
} else {
    echo ("Dados não encontrados");
};
include_once("footer.php");
?>