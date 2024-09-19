<h1>
    Médicos disponíveis
</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Especialidade</th>
    </tr>
    <?php
    foreach ($medicos as $medico):
    ?>
        <tr>
            <td>
                <?php
                echo $medico['Medico']['id'];
                ?>
            </td>
            <td>
                <button id="<?=$medico['Medico']['id']?>" onclick="chamada_medico('<?=$medico['Medico']['id']?>')">
                    <?= $medico['Medico']['nome'] ?>
                </button>
            </td>
            <td>
                <?php
                echo $medico['Medico']['especialidade'];
                ?>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
</table>
<div class="pagination">
    <p>
        <?=
            "página ".$this->Paginator->current()." de ".$this->Paginator->params['paging']['Medico']['pageCount']." totais"
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
<?php
    echo $this->Js->link("novo medico", array("controller" => 'medicos', 'action' => 'new'),array('update','#content'));
    echo "<br>";
    echo $this->Js->link("voltar",array('controller'=>'consultas','action'=>'index'),array('update','#content'));
?>