<h1><?php echo $pacientes['Paciente']['nome'] ?></h1>
<p>
    Nascimento:
    <?php 
        echo $pacientes['Paciente']['dt_nasc']
    ?>
</p>
<p>
    CPF:
    <?php 
        echo $pacientes['Paciente']['cpf']
    ?>
</p>
<p>
    Contato:
    <?php 
        echo $pacientes['Paciente']['telefone']
    ?>
</p>
<button>
    <?php 
        echo $this->Html->link('voltar', array('controller'=>'pacientes','action'=>'index'))
    ?>
</button>