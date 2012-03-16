<!-- File: /app/View/Posts/index.ctp -->
<?php
// Error reporting:
error_reporting(E_ALL^E_NOTICE);

// Including the DB connection file:
define("INCLUDE_CHECK",1);
require 'connect.php';
?>
<title>Timeline 2 - Frontend</title>
<script type="text/javascript" src="js/libs/iscroll.js"></script>
<script type="text/javascript" src="js/atp.js"></script>

    <!-- IScroll Begins -->
    <script type="text/javascript">
    var myScroll;
    function loaded() {
        myScroll = new iScroll('wrapper');
    }
    document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
    document.addEventListener('DOMContentLoaded', loaded, false);
    </script>
    <!-- IScroll Ends -->

</head>
<body>
    <!-- <div id="background">
     <img src="/libs/img/fundo.png" class="stretch" alt="" />
     </div> -->
<div id="wrapper">
    <div id="scroller">
        <div id="timeline">
            <div id="main">
                <?php
                //locale PHP
                setlocale (LC_ALL, 'ISO-8859-1');
                                      
                // We first select all the events from the database ordered by date:
                
                $dates = array();
                $res = mysql_query("SELECT * FROM posts ORDER BY date_event ASC");
                
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
            </div>
        </div>
    </div>
</div>
</body>
</html>