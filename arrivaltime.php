<?php
date_default_timezone_set("Asia/Kolkata");

if($_REQUEST['arrivaldate'] == date('d-m-Y'))
{    
    if(date('i')>0 && date('i')<=15)
    {
        $start_hour = date('H');
        $start_minute = 30;
    }
    elseif(date('i')>15 && date('i')<=30)
    {
        $start_hour = date('H');
        $start_minute = 45;
    }
    elseif(date('i')>30 && date('i')<=45)
    {
        $start_hour = date('H')+1;
        $start_minute = 0;
    }
    elseif(date('i')>45 && date('i')<=60)
    {
        $start_hour = date('H')+1;
        $start_minute = 15;
    }

}
else
{
    $start_hour = 12;
    $start_minute = 0;
}


$result = "<h6>Arrival Time</h6>";


for($i=$start_hour;$i<$start_hour+1;$i++)
{
    for($j=$start_minute;$j<60;$j+=15)
    {
        $at_id = $i*100+$j;

        if($i>12)
        {
            if($i-12<10)
                $hour = '0'.$i-12;
            else
                $hour = $i-12;
        }
        else
            $hour = $i;

        if($j==0)
            $minute = $j.$j;
        else
            $minute = $j;

    $result .= "<input type='radio' class='btn-check' name='arrival_time' id='arrival_time_".$at_id."' value='".$at_id."' onChange='show_cust_info()' required>
<label class='btn btn-outline-success mb-2' for='arrival_time_".$at_id."'>".$hour.":".$minute." PM</label>";
    }
}
            

for($i=$start_hour+1;$i<23;$i++)
{
    for($j=0;$j<60;$j+=15)
    {
        $at_id = $i*100+$j;

        if($i>12)
        {
            if($i-12<10)
                $hour = '0'.$i-12;
            else
                $hour = $i-12;
        }
        else
            $hour = $i;

        if($j==0)
            $minute = $j.$j;
        else
            $minute = $j;

    $result .= "<input type='radio' class='btn-check' name='arrival_time' id='arrival_time_".$at_id."' value='".$at_id."' onChange='show_cust_info()' required>
<label class='btn btn-outline-success mb-2' for='arrival_time_".$at_id."'>".$hour.":".$minute." PM</label>";
    }
}


echo $result;

?>
