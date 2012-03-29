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
<div id="divMediaBrowserTitle" class="divMediaBrowserTitle"><h3>Alterar Imagem</h3></div>
<?php
    echo $this->Form2->create('Post', array('type' => 'file'));
    echo $this->Form2->input('image_path', array('label' => 'Imagem do Evento', 'div' => array('class' => 'divMediaBrowserImagePath')));
    echo $this->Form2->input('fileName', array('type' => 'file', 'label' => '', 'class' => 'divMediaBrowserUpload'));
    echo $this->Form2->input('id', array('type' => 'hidden'));
    echo $this->TwitterBootstrap->button("Alterar", array("style" => "primary", "size" => "medium", "class" => "fieldMediaBrowserSubmit"));
    
?>
      <div id ="divMediaPreview" class="divMediaPreview"> 
          <img src="<?php echo $post['Post']['preview_path']?>"></a>
      </div>

      <div id="divButtonMediaDelete" class="divButtonMediaDelete btn btn-small btn-danger">
        <?php echo $this->Html->link('', array('action' => 'mediadelete', $current_id), array('class'=>'js-ajax icon-trash icon-large', 'style'=>'color: #FFF; font-size:17px; text-decoration:none;')); ?>
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
?>
</body>
</html>