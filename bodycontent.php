
<?php
    if(isset($_REQUEST['page_name']) && $_REQUEST['page_name']!== 'herobanner')
        {
            echo "<div class='container-fluid'>";
            include($_REQUEST['page_name'].".php");
            echo "</div>";
        }
    else
        include("herobanner.php"); 
?>
