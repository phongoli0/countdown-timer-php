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
            $message = "https://lh3.googleusercontent.com/SKYhFEPhxAeGosadWdziM3L8KUJ7emSwC-ve1DZsVleNHWiOFv3tuiHXzYqoG4lae4uAKt3tWK0-0wHmSr8su375QacrHAEF7DBakon8zH_Yca9mfZxx21crZwc0MHEYHHKM54FK_XgcrEfaiu_LWhQ1eFuKvdT4oaDppD094X5w-DhB3ihaCIEgtCe4kneqMHUG1UPIhrrbERoc97DRw5sad-9mtFq6y1SCKFhzHu0AHYpic35EWvHllpZZw0w40Y41JYQaNg4uNKV4zePtpT86nVgVy8OtD6gBGar184DOQMoi6v_WtN56rEEB6XvHsPAKe8ccwZEClZvO96rINN7Hel2nR7UvKIltzF4j9GbJOcbRtYsHQAklCovdKQRwCyLgJVTYbSQgy5SJ71Sf6-hcylzcmYep2J1uQpJXXW1r9j3PC2N_NVz7Yn5k2BkO3rWtziiNzi7rxkpdNSikpei4qPeqQyoLwfGZpPc186T1i47Qhwp-mfjAyyZ9yZ9XtdoIj264SsLuawbyx9CMTBh7RwL9UP2dwnsT_3epqBe13D4N3PEX-hrqhx0ZYln0aK2vzAc7T7YYANmznyIy3UNVmSTwGCLANI-qk2sTHd0iUBHhXrjrvRIMaGOL-a9EtM_cYgXQvDuheZM6jK1FYUAluBDXDfj2TX9yWCofjouMLrIlkGUJ=w110-h102-no";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Until xmas</title>
</head>
<body style="margin:0px; background-color:black">
    <img style="-webkit-user-select: none" src="<?php echo $message ?>">
</body>
</html>