</head>
<!-- File: /app/View/Posts/add.ctp -->
<body>

<!-- DataTables Begin -->
<?php
echo $this->Html->css('libs/demo_page');
echo $this->Html->css('libs/demo_table_jui');
echo $this->Html->script('libs/jquery.dataTables.min.js');
?>

<script type="text/javascript" language="javascript">
$(document).ready(function() {
    oTable = $('#event_table').dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "oLanguage": {
            "sProcessing": "Carregando...",
            "sLengthMenu": "Exibindo _MENU_ eventos por página",
            "sZeroRecords": "Nenhum evento encontrado",
            "sInfo": "Exibindo _START_ a _END_ de _TOTAL_ eventos",
            "sInfoEmpty": "Exibindo 0 de 0 eventos",
            "sInfoFiltered": "(filtrado do total de _MAX_ eventos)",    
            "sInfoPostFix": "",
            "sSearch": "Filtrar",
            "sUrl": "",
            "oPaginate": {
                "sFirst":    "Primeira",
                "sPrevious": "Anterior",
                "sNext":     "Próxima",
                "sLast":     "Última"
                    }
        }
    });
});
</script>
<!-- DataTables End -->
</head>

<body id="dt_example">
<div class="demo_jui">
<h2>Eventos</h2>
<p><?php echo $this->Html->link('Novo Evento', array('action' => 'add')); ?></p>
<table id="event_table">
    <thead>
        <tr>
        <th>Id</th>
        <th>Título do Evento</th>
        <th>Criado:</th>
        <th>Modificado:</th>
        <th>Ações</th>
        </tr>
    </thead>
    <tbody>
<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr class="gradeA">
        <td class="center"><?php echo $post['Post']['id']; ?>
        </td>
        <td class="center">
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
        </td>
        <td class="center">
            <?php echo $post['Post']['created']; ?>
        </td>
        <td class="center">
            <?php echo $post['Post']['modified']; ?>
        </td>
        <td class="center">
            <?php echo $this->Form->postLink(
                'Remover',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Confima a exclusão do evento?'));
            ?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']));?>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
</div>
</body>
</html>