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
        <input type="text" id="inputcodigo" name="nomeCliente" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
<!--fim formulario -->

<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      <th scope="col">Cpf</th>
      <th scope="col">Alterar</th>
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
      <td><?=$contatos["cpfCliente"]?> </td>
      <td> <a class="btn btn-primary" href="alterarFormulario.php?idCliente=<?=$contatos["idCliente"]?>">
      Alterar
      </a>
      </td>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
    
  </tbody>
</table>
<!--fim tabela-->

</div>
<?php
include_once("footer.php");
?>