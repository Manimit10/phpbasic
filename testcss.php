<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Test</title>
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
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
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
    <div style="background-color: white"><?php
        function welcome ($fname , $lname){
        echo "welcome " . $fname . $lname . " to my site!";
        }
        welcome("Mani" , "Tahriri");
    ?></div>
    <div style="background-color: black">test</div>
  </aside>
  <footer class="footer">Footer</footer>
</div>
</body>
</html>