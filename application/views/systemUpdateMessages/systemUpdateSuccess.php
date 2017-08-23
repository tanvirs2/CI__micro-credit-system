<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url=<?php echo base_url();?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!! System Updated</title>
</head>
<body>
    <?php
        echo '<div style="border: 2px solid #383337; width: 700px; margin: 100px auto; padding: 10px; line-height: 0.7; text-align: center;">';
        echo '<img src="http://www.nihalit.com/src/home/images/logo.png" />';
        echo '<h1 style="color: #0070C6;">Success!! System Updated :)</h1>';
        echo '<div id="clockdiv"><div class="smalltext" style="color: #0070C6;">Automatic Rediract: <span class="seconds"></span></div></div>';
        echo '</div>';
    ?>
 

<script>
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 5);
    return {
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);  
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
        clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);

</script>
</body>
</html>