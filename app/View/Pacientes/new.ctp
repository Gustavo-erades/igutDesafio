<h1 class="display-6 mt-3">Cadastrar novo paciente</h1>
<hr>
<form class="form-group mt-2 mb-5">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="pacienteNome" placeholder="">
  <label for="pacienteNome">Nome</label>
</div>

<div class="form-floating mb-3">
  <input type="number" class="form-control" id="pacienteCpf" placeholder="">
  <label for="pacienteCpf">CPF</label>
</div>

<div class="form-floating mb-3">
  <input type="tel" class="form-control" id="pacienteTelefone" placeholder="">
  <label for="pacienteTelefone">Telefone</label>
</div>

<div class="form-floating mb-3">
  <input type="date" class="form-control" id="pacienteNascimento" placeholder="">
  <label for="pacienteNascimento">Nascimento</label>
</div>
    
<button class="btn btn-info" type="button">Cadastrar paciente</button>

</form>
<?php
//echo $this->Form->create('Paciente');
//echo $this->Form->input('nome');
//echo $this->Form->input('cpf');
//echo $this->Form->input('telefone');
//echo $this->Form->input('dt_nasc',array('type'=>'text'));
//echo $this->Form->end('cadastrar');
//echo $this->Js->link('voltar',array('controller'=>'pacientes','action'=>'index'),array('update','#content'));
?>
