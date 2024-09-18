<h1>Novo médico</h1>
<?php 
    echo $this->Form->create('Medico');
    echo $this->Form->input('nome');
    echo $this->Form->input('crm',array('type'=>'number'));
    echo $this->Form->input('especialidade');
    echo $this->Form->end('Cadastrar médico');
    echo $this->Html->link('voltar',array('controller'=>'medicos','action'=>'index'));
?>