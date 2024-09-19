<ul>
    <li>
        <button onclick="chamada_medicos()">
            Médicos
        </button>
    </li>
    <li>
        <button onclick="chamada_pacientes()">
            Pacientes
        </button>
    </li>
    <li>
        <?= $this->Js->link('atendimentos',array('controller'=>'atendimentos','action'=>'index'),array('update'=>'#content')) ?>
    </li>
    <li>
        <?= $this->Js->link('convenios',array('controller'=>'convenios','action'=>'index'),array('update'=>'#content')) ?>
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
                <?= $this->Js->link($consulta['Medico']['nome'],array('controller'=>'medicos','action'=>'view',$consulta['Consulta']['medico_id']),array('update'=>'#content')) ?>
            </td>
            <td>
                <?= $consulta['Atendimento']['nome'] ?>
            </td>
            <td>
                <?= $this->Js->link($consulta['Paciente']['nome'],array('controller'=>'pacientes','action'=>'view',$consulta['Consulta']['paciente_id']),array('update'=>'#content')) ?>
            </td>
            <td>
                <?php
                echo $this->Js->link('reagendar', array('controller' => 'consultas', 'action' => 'edit',$consulta['Consulta']['id']),array('update'=>'#content'));
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
<div>
    <p>
        <?=
            "página ".$this->Paginator->current()." de ".$this->Paginator->params['paging']['Consulta']['pageCount']." totais"
        ?>
    </p>
</div>
<?php
    if($this->Paginator->params['paging']['Consulta']['pageCount']>1){
        echo $this->element('paginacao'); 
    }
 ?>
<p>
    <?php
        echo $this->Js->link('nova consulta', array('controller' => 'consultas', 'action' => 'new'),array('update'=>'#content'));
    ?>
</p>