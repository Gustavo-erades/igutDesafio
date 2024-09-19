<h1>Cadastrar novo paciente</h1>
<?php
echo $this->Form->create('Paciente');
echo $this->Form->input('nome');
echo $this->Form->input('cpf');
echo $this->Form->input('telefone');
echo $this->Form->input('dt_nasc',array('type'=>'text'));
echo $this->Form->end('cadastrar');
echo $this->Js->link('voltar',array('controller'=>'pacientes','action'=>'index'),array('update','#content'));
?>
