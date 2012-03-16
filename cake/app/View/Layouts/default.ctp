<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->

<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
//Common CSS
echo $this->Html->css('atp'); 
echo $this->Html->css('theme/smoothness/jquery-ui-1.8.17.custom');
//echo $this->Html->css('libs/bootstrap.min'); //Bootstrap

//Common Scripts
echo $this->Html->script('libs/jquery.js');
//echo $this->Html->script('libs/jquery-ui-1.8.17.custom.min.js');
echo $this->Html->script('http://cdn.jquerytools.org/1.2.6/jquery.tools.min.js');
echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js');
echo $this->Html->script('datepicker_widget.js');
echo $this->Html->script('TinyMCE/js/tiny_mce/tiny_mce.js', array('inline' => false));
//echo $this->Html->script('cakebootstrap.js'); //Bootstrap
?>

<!-- Top Menu -->
<div id="header">
    <?php echo $this->Session->flash(); ?>
    <div id="menu">[header]</div>
</div>
<!-- View Begins -->
<?php echo $this->fetch('content'); ?>
<!-- View Begins -->
<!-- Footer -->
<br>
<div id="footer">[footer]</div>
<?php 
//echo $this->element('sql_dump'); 
?>