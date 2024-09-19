<h1>Pacientes cadastrados</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Nascimento</th>
    </tr>
    <?php foreach ($pacientes as $paciente): ?>
        <tr>
            <td><?php echo $paciente['Paciente']['id']; ?></td>
            <td><?php echo $paciente['Paciente']['nome']; ?></td>
            <td><?php echo $paciente['Paciente']['cpf']; ?></td>
            <td><?php echo $paciente['Paciente']['telefone']; ?></td>
            <td><?php echo date('d/m/Y',strtotime($paciente['Paciente']['dt_nasc'])); ?></td>
            <td>
                <?php echo $this->Html->link(
                    'ver paciente',
                    array('controller' => 'pacientes', 'action' => 'view', $paciente['Paciente']['id'])
                ); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="pagination">
    <p>
        <?= 
            "página ".$this->Paginator->current()." de ".$this->Paginator->params['paging']['Paciente']['pageCount']." totais"
        ?>
    </p>
</div>
<div class="pagination">
    <ul>
        <?= $this->Paginator->first('primeiro') ?>
        <?= $this->Paginator->prev('anterior') ?>
        <?= $this->Paginator->next('próximo') ?>
        <?= $this->Paginator->last('último') ?>
    </ul>
</div>
<div>
    <?php 
        echo $this->Html->link('novo paciente',array('controller'=>'pacientes','action'=>'new'));
        echo "<br>";
        echo $this->Html->link("voltar",array('controller'=>'consultas','action'=>'index'));
    ?>
</div>