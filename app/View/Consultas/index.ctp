<h1 class="display-6 mt-3">Consultas já agendadas</h1>
<hr>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Dia</th>
        <th>Hora</th>
        <th>Médico</th>
        <th>Tipo da consulta</th>
        <th>Paciente</th>
        <th>Cadastrar</th>
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
            <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" id="<?=$consulta['Consulta']['medico_id']?>" onclick="chamada_medico(<?=$consulta['Consulta']['medico_id']?>)">
                <?= $consulta['Medico']['nome'] ?>
            </a>
        </td>
        <td>
            <?= $consulta['Atendimento']['nome'] ?>
        </td>
        <td>
            <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" id="<?=$consulta['Consulta']['paciente_id']?>" onclick="chamada_paciente(<?=$consulta['Consulta']['paciente_id']?>)">
                <?= $consulta['Paciente']['nome'] ?>
            </a>
        </td>
        <!--
            <td>
                <?php
                echo $this->Js->link('reagendar', array('controller' => 'consultas', 'action' => 'edit',$consulta['Consulta']['id']),array('update'=>'#content'));
                ?>
            </td>
            <td>
                <?php
                echo $this->Form->postLink('Cancelar', array('action' => 'delete',$consulta['Consulta']['id']),array('confirm'=>'Deseja cancelar a consulta?'));
                ?>
            </td>-->
        <td>
            <button class="btn btn-outline-secondary">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
            </button>
            <button class="btn btn-outline-secondary">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
            </button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<div>
    <p class="d-flex flex-row-reverse">
        <?=
            "página ".$this->Paginator->current()." de ".$this->Paginator->params['paging']['Consulta']['pageCount']." páginas"
        ?>
    </p>
</div>
<?php
    if($this->Paginator->params['paging']['Consulta']['pageCount']>1){
        echo $this->element('paginacao'); 
    }
 ?>
<button class="btn btn-info text-dark mb-4" id="cadConsulta" onclick="newConsulta()">
    Nova Consulta
</button>