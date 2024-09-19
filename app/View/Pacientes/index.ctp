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
                 <button id="<?=$paciente['Paciente']['id']?>" onclick="chamada_paciente('<?=$paciente['Paciente']['id']?>')">
                    <?= $paciente['Paciente']['nome'] ?>
                </button>
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
        echo $this->Js->link('novo paciente',array('controller'=>'pacientes','action'=>'new'),array('update','#content'));
        echo "<br>";
        echo $this->Js->link("voltar",array('controller'=>'consultas','action'=>'index'),array('update','#content'));
    ?>
</div>