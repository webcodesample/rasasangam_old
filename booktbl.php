<?php
    if(isset($_REQUEST))
        print_r($_REQUEST);
?>

<div class="container mt-3">

        <h5 class="text-success">Table Booking Form</h5>
        <form method="post">
        <p>
            <h6>Number of Persons</h6>
            <?php
                for($i=2;$i<25;$i++)
                {
                    echo "<input type='radio' class='btn-check' name='no_of_person' id='no_of_person_".$i."' value='".$i."' required>
<label class='btn btn-outline-success mb-2' for='no_of_person_".$i."'>".$i."</label>";
                }
            ?>
        </p>

        <p>
            <h6>Select Date</h6>
            <?php
                $current_date = date('d');
                $current_month = date('m');
                $current_year = date('Y');
                $limit = $current_date + 10;

                for($i=$current_date;$i<$limit;$i++)
                {
                    $date = date('D - d M',mktime(0,0,0,$current_month,$i,$current_year));
                    $booking_date = date('d-m-Y',mktime(0,0,0,$current_month,$i,$current_year));

                    echo "<input type='radio' class='btn-check' name='booking_date' id='booking_date_".$i."' value='".$booking_date."' onChange='show_at(this.value)' autocomplete='off' required>
<label class='btn btn-outline-success mb-2' for='booking_date_".$i."'>".$date."</label>";
                }
            ?>
        </p>

        <p id="arrival_time_part">
        </p>
        <div id="customer_info" style="display:none">
            <input type="text" class="form-control p-2 mb-2" style="width:350px;" name="booking_name" placeholder="Enter Your Name" required>
            <input type="text" class="form-control p-2 mb-2" style="width:350px;" name="booking_email" placeholder="Enter Your Email" required>
            <input type="text" class="form-control p-2 mb-2" style="width:350px;" name="booking_mobile" placeholder="Enter Your Mobile No" required>
        </div>
            <input type="hidden" name="page_name" value="booktbl">
            <input type="submit" class="btn btn-success" value="Book Table">
        </form>

</div>