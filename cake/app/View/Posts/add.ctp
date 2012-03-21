<!-- File: /app/View/Posts/add.ctp -->
</head>
<body>
<!-- Top Menu -->
<div id="header">
    <?php echo $this->Session->flash(); ?>
    <div id="menu"></div>
</div>
<!-- Date Picker Format Begin -->
<script type="text/javascript" language="javascript">
$(document).ready(function() {
   $( "input.datepicker" ).dp({
      dateFormat: 'dd-mm-yy', 
      altFormat: 'yy-mm-dd'
   }); 
});
</script>
<!-- Date Picker Format End -->
<script type="text/javascript" language="javascript">
// Create the event trigger, in this case when a link with the class CLOSE inside the overlayer div is clicked 
$('#overlayer a.close').live('click', function () {
    // Fade out the overlayer
    $('#overlayer').fadeOut(400);
    $('#overlayer').fadeOut(400);
    return false;
}); 
</script>
<h3>Novo Evento</h3>
<?php
    echo $this->Form2->create('Post', array('type' => 'file'));
    echo $this->TinyMCE->editor(array('theme' => 'advanced', 'mode' => 'textareas'));
    echo $this->Form2->input('type', array('label' => 'Tipo'));       
    echo $this->Form2->input('title', array('label' => 'Evento', 'value' => ''));
    echo $this->Form2->input('body', array('label' => 'Descritivo', 'value' => ''));
    echo $this->Form2->input('fileName', array('type' => 'file', 'label' => 'Inserir Imagem'));
    echo $this->Form2->input('date_event', array('label' => 'Data do Evento', 'class'=>'datepicker', 'type'=>'text'));
  	echo $this->Form2->input('id', array('type' => 'hidden'));
    echo $this->Form2->end('Salvar Evento');
?>
      <div class="divButton">
        <a href="#close" class="close error-message">Fechar</a>
      </div>
<!-- Footer -->
<br>
<div id="footer"></div>
<!-- SQL Dump -->
<?php 
//echo $this->element('sql_dump'); 
?>
</body>
</html>