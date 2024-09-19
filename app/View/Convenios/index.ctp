<h1>Convenios já cadastrados:</h1>
<table>
    <tr>
        <th>
            Nome do convênio
        </th>
        <th>
            teste
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
                <button>
                    <?php
                    echo $this->Form->postLink('Deletar', array('action' => 'delete', $convenio['Convenio']['id']), array('confirm' => 'Deseja deletar esse convênio?'));
                    ?>
                </button>

            </td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
<hr>
<h1>Cadastrar novo convênio</h1>
<?php
echo $this->Form->create('Convenio');
echo $this->Form->input('nome');
echo $this->Form->end('cadastrar novo convênio');
echo $this->Html->link("voltar",array('controller'=>'consultas','action'=>'index'))
?>