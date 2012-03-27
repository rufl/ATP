</head>
<!-- File: /app/View/Posts/admin.ctp -->
<body>
<!-- DataTables Begin -->
<?php
echo $this->Html->script('libs/jquery.dataTables.min.js');
echo $this->Html->script('libs/datepicker_widget.js');
?>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#overlay').hide();
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
<!-- Inline CRUD Views + TinyMCE init in Modals Begin -->
<script type="text/javascript" language="javascript">
$('a.js-ajax').live('click', function() { 
    $('#overlayer').load($(this).attr('href'), function () {
        $(this).fadeIn(400);
        tinyMCE.init({ 
        mode : "textareas",
        elements : "Descritivo",
        height : "350px",
        width : "650px",
        skin : "cirkuit",
        language : "br",
        plugins : "fullscreen,autolink,inlinepopups,preview,advlist",
        theme_advanced_buttons1_add : "fullscreen,preview",
        dialog_type : "modal",
        plugin_preview_width : "500",
        plugin_preview_height : "600",
        theme : "advanced"
        });
    });
    $('#overlay').show();
    return false; 
});
</script>
<!-- Inline CRUD Views + TinyMCE init in Modals End -->
</head>
<div id="overlayer">
</div>
<div id="overlay">
</div>

<body id="dt_example">
<div class="demo_jui">
<h2>Eventos</h2>
<p><?php echo $this->Html->link('Novo Evento', array('action' => 'add'), array('class'=>'js-ajax')); ?></p>
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
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']), array('class'=>'js-ajax'));?>           
        </td>
        <td class="center">
            <?php echo $post['Post']['created']; ?>
        </td>
        <td class="center">
            <?php echo $post['Post']['modified']; ?>
        </td>
        <td class="center">
              <div style="font-size: 17px;" class="divButton btn btn-small btn-success">
                <i class="icon-pencil icon-large"></i>
                  <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']), array('class'=>'js-ajax')); ?>
              </div>

              <div style="font-size: 17px;" class="divButton btn btn-small btn-danger">
                <i class="icon-remove icon-large"></i>
                  <?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $post['Post']['id']), array('class'=>'', 'confirm' => 'Confima a exclusão do evento?')); ?>
              </div>

            
        </td>   
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
</div>
</body>
</html>