
<?php
    $result = "";

    if($_REQUEST['page_name']!== 'herobanner')
    {
        $result .= "<div class='container-fluid'>";
        $result .= file_get_contents($_REQUEST['page_name'].".php");
        $result .= "</div>";
    }
    else
    {
        $result .= file_get_contents("herobanner.php"); 
    }

        echo $result;
?>
