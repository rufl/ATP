<!-- File: /app/View/Posts/mediabrowser.ctp -->
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
    $('#overlay').fadeOut(400);
    return false;
}); 
</script>
<h3>Alterar Imagem</h3>
<?php
    echo $this->Form2->create('Post', array('type' => 'file'));
    echo $this->Form2->input('image_path', array('label' => 'Imagem do Evento'));
    echo $this->Form2->input('fileName', array('type' => 'file', 'label' => 'Alterar Imagem', 'class'=>'btn btn-small btn-info'));
    echo $this->Form2->input('id', array('type' => 'hidden'));
    echo $this->Form2->end('Alterar Imagem', array('class'=>'btn btn-mini btn-small'));
?>
      <div class="thumbPreview"> 
          <img src="<?php echo $post['Post']['thumb_path']?>"></a>
      </div>

      <div style="font-size: 17px;" class="divButton delete btn btn-small btn-danger">
        <i class="icon-trash icon-large"></i> 
        <?php echo $this->Html->link('Deletar', array('action' => 'mediadelete', $current_id), array('class'=>'js-ajax')); ?>
      </div>

      <div class="divButton">
        <a href="#close" class="close error-message">Fechar</a>
      </div>
<!-- Footer -->
<br>
<div id="footer"></div>
<!-- SQL Dump -->
<?php 
//echo $this->element('sql_dump');
//echo debug($this);
?>
</body>
</html>