</head>
<!-- File: /app/View/Posts/add.ctp -->
<body>
<!-- Dropdown Event Type End -->
<script type="text/javascript" language="javascript">
var $dropdown_type= $('#PostType'),
    $img_upload= $('#PostFileName');
$dropdown_type.change(function() {
    if ($dropdown_type.val() == 'Galeria') {
        $img_upload.removeAttr('disabled');
    } else {
        $img_upload.attr('disabled', 'disabled').val('');
    }
}).trigger('change'); // added trigger to calculate initial state​​​​​​​​​​

</script>
<!-- Dropdown Event Type End -->

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

<h2>Novo Evento</h2>
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
</body>
</html>