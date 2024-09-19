<h1>
    <?php 
        echo $medicos['Medico']['nome'];
    ?>
</h1>
<p>
    Especialidade:
    <?php 
        echo $medicos['Medico']['especialidade'];
    ?>
</p>
<p>
    CRM:
    <?php 
        echo $medicos['Medico']['crm'];
    ?>
</p>
<?php 
   echo $this->Html->link('voltar',array('controller'=>'consultas','action'=>'index'))
?>