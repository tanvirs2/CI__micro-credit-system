<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Updated Need!!</title>
    <style>
        a#updateMe {
            text-decoration: none;
            font-size: 30px;
            color: green;
            border: 1px solid;
            padding: 2px;
            margin-left: 18px;
        }

        a#updateMe:hover {
            color: #fff;
            background: green;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <?php
        echo '<div style="border: 2px solid #383337; width: 700px; margin: 100px auto; padding: 10px; line-height: 0.7; text-align: center;">';
		echo '<img src="http://www.nihalit.com/src/home/images/logo.png" />';
		echo '<h1 style="color: #0070C6;">Please Update System Before Run The Application.</h1>';
		echo '<h1 style="color: #0070C6;">URL: <a href="'.base_url().'nihalit/system-update" id="updateMe">Update Me</a></h1>';
		echo '</div>';
    ?>
</body>
</html>


<?php die(); ?>