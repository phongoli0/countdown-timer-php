<?php 
    $now = time();
    $xmas = mktime(0,0,0,12,25,2019);
    $countdown = round(($xmas - $now)/86400);
    $currentTime = microtime(true);
    $dateString = date("n") . "-" . date("j");
    $message = "";
    switch ($countdown) {
        case 1:
            $message = "merry christmas eve";
            break;
        case 2:
            $message = "2 days until christmas";
            break;
        case 3:
            $message = "3 days until christmas";
            break;
        case 4:
            $message = "4 days until christmas";
            break;
        default: 
            $message = "$countdown until christmas";
    }
    echo "<br>","$message";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countdown Until Christams</title>
</head>
<body>
    <h1>
        <?php 
           print "$countdown days until Christmas";
        ?>
    </h1>
</body>
</html>