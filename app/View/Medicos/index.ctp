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
                <?php
                echo $this->Html->link($medico['Medico']['nome'], array('controller' => 'medicos', 'action' => 'view', $medico['Medico']['id']));
                ?>
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
<?php
echo $this->Html->link("novo medico", array("controller" => 'medicos', 'action' => 'new'));
?>