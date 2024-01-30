<?php
include_once("header.php");
?>

<div class = "container">

<form class="row g-3"  method="Post" action="../Controller/adicionarCliente.php">
<div class="col-md-4">
<label for="nomeCliente" class="form-label">Nome</label>
<input type="text" class="form-control" id="nomeCliente" value="" required name="nomeCliente">
</div>

<div class="col-md-4">
<label for="foneCliente" class="form-label">Fone</label>
<input type="text" class="form-control" id="foneCliente" value="" required name="foneCliente">
</div>

<div class="col-md-6">
<label for="cpfCliente" class="form-label">CPF</label>
<input type="text" class="form-control" id="cpfCliente" value="" required name="cpfCliente">
</div>

<div class="col-12">
<button class="btn btn-primary" type="submit">Submit</button>
</div>

</form>
<?php
include_once("footer.php");
?>