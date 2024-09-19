<ul>
    <li>
        <?= $this->Html->link('medicos',array('controller'=>'medicos','action'=>'index')) ?>
    </li>
    <li>
        <?= $this->Html->link('pacientes',array('controller'=>'pacientes','action'=>'index')) ?>
    </li>
    <li>
        <?= $this->Html->link('atendimentos',array('controller'=>'atendimentos','action'=>'index')) ?>
    </li>
    <li>
        <?= $this->Html->link('convenios',array('controller'=>'convenios','action'=>'index')) ?>
    </li>
</ul>
<h1>Consultas já agendadas</h1>
<hr>
<table>
    <tr>
        <th>Id</th>
        <th>Dia</th>
        <th>Hora</th>
        <th>Médico</th>
        <th>Tipo da consulta</th>
        <th>Paciente</th>
    </tr>
    <?php foreach ($consultas as $consulta): ?>
        <tr>
            <td>
                <?= $consulta['Consulta']['id'] ?>
            </td>
            <td>
                <?= date('d/m/Y', strtotime($consulta['Consulta']['dia'])) ?>
            </td>
            <td>
                <?= date('H:i', strtotime($consulta['Consulta']['hora'])) ?>
            </td>
            <td>
                <?= $this->Html->link($consulta['Medico']['nome'],array('controller'=>'medicos','action'=>'view',$consulta['Consulta']['medico_id'])) ?>
            </td>
            <td>
                <?= $consulta['Atendimento']['nome'] ?>
            </td>
            <td>
                <?= $this->Html->link($consulta['Paciente']['nome'],array('controller'=>'pacientes','action'=>'view',$consulta['Consulta']['paciente_id'])) ?>
            </td>
            <td>
                <?php
                echo $this->Html->link('reagendar', array('controller' => 'consultas', 'action' => 'edit',$consulta['Consulta']['id']));
                ?>
            </td>
            <td>
                <?php
                echo $this->Form->postLink('Cancelar', array('action' => 'delete',$consulta['Consulta']['id']),array('confirm'=>'Deseja cancelar a consulta?'));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<p>
    <?php
    echo $this->Html->link('nova consulta', array('controller' => 'consultas', 'action' => 'new'));
    ?>
</p>