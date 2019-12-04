<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date Example</title>
</head>
<body>
    <?php
        $today = date ("l") . "<br>";
        echo "today is " . $today;
        // Prints the day, date, month, year, time, AM or PM
        $fulldate = date("l jS \of F Y h:i:s A");
        echo "full date and time is " . $fulldate . "<br>";
        // small m represent month in numeric format 1 to 12
        $month = date ("m") ;
        echo "month in numeric format is " . $month . "<br>";
        // current minute represent by i
        $minute = date ("i") . "<br>";
        echo "current minutes is " . $minute;
        // two digit of year
        $twodigityear = date ("y");
        // number of day in a month
        $daynumeric = date ("j");
        echo "current date in Y-M-D format is " . $twodigityear . "-" . $month . "-" . $daynumeric;
        
    ?>
</body>
</html>