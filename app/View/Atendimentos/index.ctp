<h1>Atendimentos Cadastrados:</h1>
<table>
    <th>
        Nome
    </th>
    <?php foreach ($atendimentos as $atendimento): ?>
        <tr>
            <td>
                <?= $atendimento['Atendimento']['nome'] ?>
            </td>
            <td>
                <button>
                    <?=
                        $this->Form->postLink('Delete',array('action'=>'delete',$atendimento['Atendimento']['id']),array('confirm'=>'deseja deletar esse tipo de atendimento?'))
                    ?>
                </button>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<?php
echo $this->Form->create('Atendimento');
echo $this->Form->input('nome');
echo $this->Form->end('cadastrar atendimento');
?>