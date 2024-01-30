<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");
?>
<!-- inicio formulario -->
<div class="container m-4">
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="nomeCliente"class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
</form>
<!--fim formulario -->

<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      <th scope="col">CPF</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
     extract($_REQUEST,EXTR_OVERWRITE);

     $nomeCliente = isset($nomeCliente)?$nomeCliente : "";
     
     if($nomeCliente){
       
       $dados = buscarClienteNome($conexao,$nomeCliente);

     foreach($dados as $contatos) :
     ?>
    <tr>
    <th scope="row"> <?php echo($contatos["idCliente"]);?> </th>
      <td> <?php echo($contatos["nomeCliente"])?> </td>
      <td> <?=$contatos["foneCliente"]?> </td>
      <td> <?=$contatos["cpfCliente"]?> </td>
      <td>
     <!-- Button trigger modal -->
<button type="button" idCliente="<?=$contatos["idCliente"]?>" nomeCliente="<?=$contatos["nomeCliente"]?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarModal">
  Deletar
</button>
      </td>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
<!--fim tabela-->
</div>

<!-- Modal -->
<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atenção na Exclusão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../Controller/deletarCliente.php" method="post">
          <input type="hidden" value="" class="idCliente from-control" name="idCliente">
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
  
      </div>
    </div>
  </div>
</div>
<script>
    let deletarClienteModal = document.getElementById('deletarModal');
        deletarClienteModal.addEventListener('show.bs.modal', function(event) {
    let button = event.relatedTarget;
    let idCliente = button.getAttribute('idcliente');
    let nome_Cliente = button.getAttribute('nomecliente');

    let modalBody = deletarClienteModal.querySelector('.modal-body');
    modalBody.textContent = 'Deseja realmente excluir o Cliente ' + nome_Cliente +'?'

    let IDCliente = deletarClienteModal.querySelector('.modal-footer .idCliente');
    IDCliente.value = idCliente;
  })
</script>
<?php
include_once("footer.php");
?>