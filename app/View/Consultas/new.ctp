<h1 class="display-6 mt-3">Agendar consulta</h1>
<form class="form-group mt-2 mb-5">
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="consultaDia" placeholder="">
  <label for="consultaDia">Dia</label>
</div>

<div class="form-floating mb-3">
  <input type="time" class="form-control" id="consultaTime" placeholder="">
  <label for="consultaTime">Hora</label>
</div>

<div class="form-floating mb-3">
  <input type="select" class="form-control" id="medicosNome" placeholder="">
  <label for="medicosNome">Médico</label>
</div>

<div class="form-floating mb-3">
  <input type="select" class="form-control" id="pacientesNome" placeholder="">
  <label for="pacientesNome">Paciente</label>
</div>

<div class="form-floating mb-3">
  <input type="select" class="form-control" id="atendimentosNome" placeholder="">
  <label for="atendimentosNome">Paciente</label>
</div>

<div class="form-floating mb-3">
  <input type="select" class="form-control" id="conveniosNome" placeholder="">
  <label for="conveniosNome">Paciente</label>
</div>
    
<button class="btn btn-info" type="button">Agendar consulta</button>

</form>
<?php 
    //echo $this->Form->create('Consulta');
    //echo $this->Form->input('dia',array('type'=>'date'));
    //echo $this->Form->input('hora',array('type'=>'time')); 
    //echo $this->Form->input('medico_id',array('type'=>'select','options'=>$medicos));
    //echo $this->Form->input('paciente_id',array('type'=>'select','options'=>$pacientes));
    //echo $this->Form->input('atendimento_id',array('type'=>'select','options'=>$atendimentos));
    //echo $this->Form->input('convenio_id',array('type'=>'select','options'=>$convenios));
    //echo $this->Form->end('Agendar Consulta');
?>