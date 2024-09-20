<h1 class="display-6 mt-3">Convenios já cadastrados:</h1>
<table class="table table-hover">
    <tr>
        <th>
            Nome do convênio
        </th>
        <th>
            Cadastrar
        </th>
    </tr>
    <?php foreach ($convenios as $convenio): ?>
    <tr>
        <td>
            <?php
                echo $convenio['Convenio']['nome']
                ?>
        </td>
        <td>
            <!--
            <button>
                <?php
                    echo $this->Form->postLink('Deletar', array('action' => 'delete', $convenio['Convenio']['id']), array('confirm' => 'Deseja deletar esse convênio?'));
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
    <?php
    endforeach;
    ?>
</table>
<hr>
<h1 class="display-6 mt-3">Cadastrar novo convênio</h1>
<form class="form-group mt-2 mb-5">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nome do novo convênio" aria-label="Recipient"
            aria-describedby="button-addon2">
        <button class="btn btn-info" type="button" id="button-addon1">cadastrar novo convênio</button>
    </div>
</form>
<?php
//echo $this->Form->create('Convenio');
//echo $this->Form->input('nome');
//echo $this->Form->end('cadastrar novo convênio');
?>