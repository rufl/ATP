<!-- File: /app/View/Posts/edit.ctp -->
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

<!-- Modal Controls Begin -->
<script type="text/javascript" language="javascript">
// Create the event trigger, in this case when a link with the class CLOSE inside the overlayer div is clicked 
$('#overlayer a.close').live('click', function () {
    // Fade out the overlayer
    $('#overlayer').fadeOut(400);
    $('#overlay').fadeOut(400);
    return false;
}); 
</script>
<!-- Modal Controls End -->

<div id="divEditTitle" class="divEditTitle"><h3>Editando Evento</h3></div>

<?php
    echo $this->Form2->create('Post', array('type' => 'file'));
    echo $this->TinyMCE->editor(array('theme' => 'advanced', 'mode' => 'textareas'));  
    echo $this->TwitterBootstrap->input(array("field" => "", "input" => $this->Form2->input('title', array('label' => 'Evento', 'class'=> 'input-title', 'div' => array('class' => 'fieldEditEvento')))));
    echo $this->Form2->input('type', array('label' => 'Tipo','div' => array('class' => 'fieldEditTipo')));
    echo $this->Form2->input('body', array('label' => 'Descritivo','div' => array('class' => 'fieldEditDescritivo')));
    echo $this->Form2->input('image_path', array('label' => 'Imagem do Evento','div' => array('class' => 'fieldEditImagePath')));
    echo $this->Form2->input('date_event', array('label' => 'Data do Evento', 'class'=>'datepicker', 'type'=>'text', 'div' => array('class' => 'fieldEditData')));
    echo $this->Form2->input('id', array('type' => 'hidden'));
    echo $this->TwitterBootstrap->button("Salvar Evento", array("style" => "primary", "size" => "medium", "class" => "fieldEditSubmit"));
?>
      <div id ="divThumbPreview" class="divThumbPreview">
      <img src="<?php echo $post['Post']['thumb_path']?>"></a>
      </div>

      <div id="divButtonMediaBrowser"style="font-size: 17px;" class="divButtonMediaBrowser btn btn-small btn-info">
          <?php echo $this->Html->link('', array('action' => 'mediabrowser', $current_id), array('class'=>'js-ajax icon-pencil icon-large', 'style'=>'color: #FFF; font-size:17px; text-decoration:none;')); ?>
      </div>

      <div id="divButtonClose" class="divButtonClose">
      <a href="#close" class="close buttonText"><i class="icon-remove icon-large"></i></a>
      </div>

<!-- Footer -->
<br>
<div id="footer"></div>
<!-- SQL Dump -->
<?php 
//echo $this->element('sql_dump');
//echo debug($this);
//echo $current_id;
?>
</body>
</html>