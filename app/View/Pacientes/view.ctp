<h1><?php echo $pacientes['Paciente']['nome'] ?></h1>
<p>
    Nascimento:
    <?php 
        echo date('d/m/Y',strtotime($pacientes['Paciente']['dt_nasc']));
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
        echo $this->Js->link("voltar",array('controller'=>'consultas','action'=>'index'),array('update','#content'));
    ?>
</button>