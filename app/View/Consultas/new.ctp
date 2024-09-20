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
  <label for="atendimentosNome">Atendimento</label>
</div>

<div class="form-floating mb-3">
  <input type="select" class="form-control" id="conveniosNome" placeholder="">
  <label for="conveniosNome">Paciente</label>
</div>
    
<button class="btn btn-info" type="button" onclick="cadConsultas()">Agendar consulta</button>

</form>