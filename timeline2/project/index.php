<?php
// Error reporting:
error_reporting(E_ALL^E_NOTICE);

// Including the DB connection file:
define("INCLUDE_CHECK",1);
require 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Timeline 2</title>

<link rel="stylesheet" type="text/css" href="./libs/css/styles.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.6/jquery.tools.min.js"></script>
<script type="text/javascript" src="./libs/js/script.js"></script>

</head>

<body>
<div id="main">
    <div id="timelineLimiter"> <!-- Hides the overflowing timelineScroll div -->
	    <div id="timelineScroll"> <!-- Contains the timeline and expands to fit -->
        <?php
        //locale PHP
        //setlocale (LC_ALL, 'pt_BR.utf8');
                              
        // We first select all the events from the database ordered by date:
        
        $dates = array();
        $res = mysql_query("SELECT * FROM timeline ORDER BY date_event ASC");
		
        while($row=mysql_fetch_assoc($res))
        {
			// Store the events in an array, grouped by years:
            $dates[date('M Y',strtotime($row['date_event']))][] = $row;
        }
        
        $colors = array('green','blue','chreme');
		$scrollPoints = '';
		
        $i=0;
        foreach($dates as $year=>$array)
        {
			// Loop through the years:
            echo '
            <div class="event">
                <div class="eventHeading '.$colors[$i++%3].'">'.$year.'</div>
                <ul class="eventList">
                ';
        
            foreach($array as $event)
            {
				// Loop through the events in the current year:
				
                echo '<li class="'.$event['type'].'">
				<span class="icon" title="'.ucfirst($event['type']).'"></span>
				'.htmlspecialchars($event['title']).'
				
				<div class="content">
					<div class="body">'.($event['type']=='image'?'<div style="text-align:center"><img src="'.$event['body'].'" alt="Image" /></div>':nl2br($event['body'])).'</div>
					<div class="title">'.htmlspecialchars($event['title']).'</div>
					<div class="date">'.date("F j, Y",strtotime($event['date_event'])).'</div>
				</div>
				
				</li>';
            }
            
            echo '</ul></div>';
        }
        
        ?>
        <div class="clear"></div>
        </div>        
    </div>
</div>

</body>
</html>