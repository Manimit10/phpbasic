<?php
// for loop 
for ($x = 0; $x < 10; $x++) {
    echo "$x <br>";
}

// nested loop	
echo "nested loop in php <br>";
for ($i=1; $i<=5; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo "*";	 
}	  	
echo "<br/>";   	
}
// for each is very useful to print array 
echo 'print array content with foreach' . '<br>';
$inArray = array('a','b','c' );
    foreach($inArray as $a){
        echo "$a, ";
    }
    echo '<br>';

    // using while loop
    $i = 1;
    while ($i <= 10) {
    echo $i++;
    }
    print '<br>';
    // do while loop in php
    print 'do-while will execute atleast one time'.'<br>';
    $i = 10;
    do {
    echo $i;
    } while ($i < 10);
?>
