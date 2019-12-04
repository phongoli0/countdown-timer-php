<?php 
    $now = time();
    $xmas = mktime(0,0,0,12,25,2019);
    $countdown = round(($xmas - $now)/86400);
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