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
<div class="pagination2">
    <p>
        <?=
            "página ".$this->Paginator->current()." de ".$this->Paginator->params['paging']['Medico']['pageCount']." totais"
        ?>
    </p>
</div>
<?php
    if($this->Paginator->params['paging']['Medico']['pageCount']>1){
        echo $this->element('paginacao'); 
    }
 ?>
<button id="<?=$medico['Medico']['id']?>" onclick="chamada_novo_medico('<?=$medico['Medico']['id']?>')">
    Cadastrar médico
</button>
<?php
    echo $this->Js->link("voltar",array('controller'=>'consultas','action'=>'index'),array('update','#content'));
?>