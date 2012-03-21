<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8; IE=edge" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
//Common CSS
echo $this->Html->css('atp');
echo $this->Html->css('libs/theme/smoothness/jquery-ui-1.8.17.custom');
echo $this->Html->css('libs/bootstrap.min');
//Common Scripts
echo $this->Html->script('libs/jquery-1.7.1.min.js');
echo $this->Html->script('libs/jquery-ui-1.8.18.custom.min.js');
echo $this->Html->script('libs/jquery.tools-1.2.6.min.js');
echo $this->Html->script('libs/datepicker_widget.js');
echo $this->Html->script('libs/tiny_mce/tiny_mce.js', array('inline' => false));
echo $this->Html->script('libs/cakebootstrap.js');
echo $this->Html->script('http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js');
?>
<!-- Top Menu -->
<div id="header">
    <?php echo $this->Session->flash(); ?> 
    <div id="menu"></div>
</div>
<!-- View Begins -->
<?php echo $this->fetch('content'); ?>
<!-- View Begins -->
<!-- Footer -->
<br>
<div id="footer"></div>
<?php 
//echo $this->element('sql_dump'); 
?>