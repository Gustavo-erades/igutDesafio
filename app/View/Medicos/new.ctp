<h1 class="display-6 mt-3">Novo médico</h1>
<hr>
<form class="form-group mt-2 mb-5">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="medicoNome" placeholder="">
  <label for="medicoNome">Nome</label>
</div>

<div class="form-floating mb-3">
  <input type="number" class="form-control" id="medicoCrm" placeholder="">
  <label for="medicoCrm">Número de CRM</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="medicoEspecialidade" placeholder="">
  <label for="medicoEspecialidade">Especialidade</label>
</div>
    
    <button class="btn btn-info" type="button">cadastrar novo atendimento</button>
</form>

<?php 
    //echo $this->Form->create('Medico');
    //echo $this->Form->input('nome');
    //echo $this->Form->input('crm',array('type'=>'number'));
    //echo $this->Form->input('especialidade');
    //echo $this->Form->end('Cadastrar médico');
?>