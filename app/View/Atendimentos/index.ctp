<h1 class="display-6 mt-3">Atendimentos Cadastrados:</h1>
<table class="table table-hover">
    <th>
        Nome
    </th>
    <th>
            Cadastrar
        </th>
    <?php foreach ($atendimentos as $atendimento): ?>
        <tr>
            <td>
                <?= $atendimento['Atendimento']['nome'] ?>
            </td>
            <td>
                <!--
                <button>
                    <?=
                        $this->Form->postLink('Delete',array('action'=>'delete',$atendimento['Atendimento']['id']),array('confirm'=>'deseja deletar esse tipo de atendimento?'))
                    ?>
                </button>
    -->
    <button class="btn btn-outline-secondary">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
            </button>
            <button class="btn btn-outline-secondary">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
            </button>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<h1 class="display-6 mt-3">Cadastrar novo atendimento</h1>
<form class="form-group mt-2 mb-5">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nome do novo atendimento" aria-label="Recipient"
            aria-describedby="button-addon2" id="atendimetoNome">
        <button class="btn btn-info" type="button" id="button-addon1" onclick="cadAtendimento()">cadastrar novo atendimento</button>
    </div>
</form>
