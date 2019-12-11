<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Practice</title>
</head>
<body>
<div class="wrapper">
  <header class="header">
    <h1>
        <?php
        echo "This is heading one tag with css style";
        ?>
    </h1>
  </header>
    <article class="main">
    <?php
    $today = date ("d F");
    // echo $today;
    // $today = date ("l");
    $spring = new DateTime('March 20');
    $summer = new DateTime('June 20');
    $fall = new DateTime('September 22');
    $winter = new DateTime('December 21');
    
    if ($today >= $spring && $today < $summer){
        $img = "spring.jpeg";
    }elseif ($today >= $summer && $today < $fall){
        $img = "summer.jpeg";
    }elseif ($today >= $fall && $today < $winter){
        $img = "autumn.jpeg";
    }else {
        $img = "winter.jpeg";
    }
    ?>
    <img src="images/<?= $img ?>" alt="season.jpg" />  

    </article>
    <aside class="aside aside-1">
    <nav>
        <ul >
            <?php
        //intializing the array
        $listmenu = array("Home", "Customer", "Market Analysis" ,"company profile", "Contact Us");
        // using for each to print each of them in the screen
        foreach ($listmenu as $li){
            echo "<li><a href='#'>" . $li . "</a></li>";
        }?>
        </ul>
    </nav>
    </aside>
  <aside class="aside aside-2">
    <?php
        function welcome ($fname , $lname){
        echo "welcome " . $fname . $lname . " to my site!";
        }
        welcome("Jhon " , "Smith");
    ?>
    <div style="background-color: yellow">
    
    </div>
  </aside>
  <footer class="footer">
  <?php 
    $fulldate = date("l jS \of F Y ");
    $testday = date("j");
    if ($testday % 2 == 0){
        echo "<span class = 'even'>$fulldate</span>";
    }else{
        echo "<span class = 'odd'>$fulldate</span>";
    }
    ?>
  </footer>
</div>
</body>
</html>