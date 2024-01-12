function setPage(pagename)
{
    document.getElementById("page_name").value = pagename;
    document.getElementById("siteform").submit();
}

function setPage_ajax(pagename)
{
    $.ajax({
        type: 'POST',
        url: "bodycontent.php",
        data: { page_name: pagename, },
        success: function (result) {
            $("#page").html(result);
        }
    });
}

function show_at(date)
{
    $.ajax({
        type: 'POST',
        url: "App/arrivaltime.php",
        data: { arrivaldate: date, },        
        success: function (result) {
            $("#arrival_time_part").html(result);
        }
    });
}

function show_cust_info()
{
    $("#customer_info").show();
}