<h1 class="display-6 mt-3">
    Médicos disponíveis
</h1>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Especialidade</th>
        <th>Cadastrar</th>
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
            <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
            id="<?=$medico['Medico']['id']?>" onclick="chamada_medico(<?=$medico['Medico']['id']?>)">
                <?= $medico['Medico']['nome'] ?>
            </a>
        </td>
        <td>
            <?php
                echo $medico['Medico']['especialidade'];
            ?>
        </td>
        <td>
            <button class="btn btn-outline-secondary" onclick="delMedico(<?= $medico['Medico']['id'] ?>)">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
            </button>
            <button class="btn btn-outline-secondary">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
            </button>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
</table>
<div>
    <span class="d-flex flex-row-reverse">
        <?=
            "página ".$this->Paginator->current()." de ".$this->Paginator->params['paging']['Medico']['pageCount']." páginas"
        ?>
    </span>
</div>
<?php
    if($this->Paginator->params['paging']['Medico']['pageCount']>1){
        echo $this->element('paginacao'); 
    }
 ?>
<a href="#" id="cadMedico" class="btn btn-info text-dark mb-4" onclick="newMedico()">
    Novo médico
</a>