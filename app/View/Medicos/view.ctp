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
    $this->Html->link('voltar',array('controller'=>'medicos','action'=>'index'))
?>