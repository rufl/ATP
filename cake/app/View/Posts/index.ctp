<!-- File: /app/View/Posts/index.ctp -->

<h1>Eventos</h1>
<p><?php echo $this->Html->link('Adicionar Evento', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
                <th>Ações</th>
        <th>Criado em:</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Remover',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Confima a exclusão do evento?'));
            ?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']));?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>



<?php echo $this->Html->link('Adicionar Evento', array('controller' => 'posts', 'action' => 'add')); ?>