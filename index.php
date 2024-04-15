<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAPS API</title>
</head>
<body>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        body {
            height: 100%;
            overflow-y: hidden;
        }
        iframe {
            width:100vw;
            height:100vh;
            border:none;
            overflow: hidden;
        }
        
    </style>
        <?php
            $from = $_REQUEST['from'];
            $to = $_REQUEST['to'];
            $url1 = "https://maps.google.com/maps?q=";
            $url2 = $from." to ";
            $url3 = $to;
            $url4 = "&t=&z=15&ie=UTF8&iwloc=&output=embed";

            echo '<iframe src="'.$url1.$url2.$url3.$url4.'"></iframe>';
        ?>  
</body>
</html>