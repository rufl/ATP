<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
echo $this->Html->script('libs/jquery.js');
echo $this->Html->script('libs/jquery-ui-1.8.17.custom.min.js');
echo $this->Html->script('cakebootstrap.js');
echo $this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array('inline' => false));
echo $this->Html->script('general.js');
echo $this->Html->script('datepicker_widget.js');
echo $this->Html->css('libs/bootstrap.min');
echo $this->Html->css('theme/smoothness/jquery-ui-1.8.17.custom');
?>
</head>
<body>

<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
<div id="header">
    <div id="menu">[header]</div>
</div>

<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>

<!-- Add a footer to each displayed page -->
<div id="footer">[footer]</div>

</body>
</html>