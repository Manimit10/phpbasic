<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="custome.css">
    <title>Practice</title>
</head>
<body>

    <div class="title"><h1>
        <?php
        echo "This is heading one tag with css style";
        ?>
    </h1></div>
    <div class="menu">
    <ul>
        <?php
        //intializing the array
        $listmenu = array("Home", "Customer", "Market Analysis", "Contact Us");
        // using for each to print each of them in the screen
        foreach ($listmenu as $li){
            echo "<li>" . $li . "</li>";
        }?>
    </ul>
    </div>
    <div class="welcome">
    <?php

    function welcome ($fname , $lname){
        echo "welcome " . $fname . $lname . " to my site!";
    }
    welcome("Mani" , "Tahriri");
    ?>
    </div>
    <div class = "day">
        <?php
        $daynumeric = date ("j");
        echo " today date in month $daynumeric </div>";
        ?>
    </div>  
</body>
</html>

