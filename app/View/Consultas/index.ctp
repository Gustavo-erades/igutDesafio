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
                <?= $consulta['Medico']['nome'] ?>
            </td>
            <td>
                <?= $consulta['Atendimento']['nome'] ?>
            </td>
            <td>
                <?= $consulta['Paciente']['nome'] ?>
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