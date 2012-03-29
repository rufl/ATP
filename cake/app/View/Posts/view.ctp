<!-- File: /app/View/Posts/view.ctp -->
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

<h3><?php echo $post['Post']['title']?></h3>

<p><small>Criado em: <?php echo $post['Post']['created']?></small></p>
<p><?php echo $post['Post']['body']?></p>
<p><img src="<?php echo $post['Post']['image_path']?>"></a></p>
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