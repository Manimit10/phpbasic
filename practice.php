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
<?php
    echo "<h1>This is heading one tag with css style</h1>";
    //intializing the array
    $listmenu = array("Home", "Customer", "Market Analysis", "Contact Us");
    echo "<ul>";
    // using for each to print each of them in the screen
    foreach ($listmenu as $li){
        echo "<li>" . $li . "</li>";
    }
    echo "</ul>";

    function welcome ($fname , $lname){
        echo "<h4>welcome " . $fname . $lname . " to my site!</h4>";
    }
    welcome("Mani" , "Tahriri");
?>    
</body>
</html>

