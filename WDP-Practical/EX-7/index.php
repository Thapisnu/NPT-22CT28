<?php
    
    $s1 = "Lightning";
    echo "<h1>1.String Length = ".strlen($s1)."</h1>";
    echo "<h1>2.String Uppercase = ".strtoupper($s1)."</h1>";
    echo "<h1>3.String Substring = ".substr($s1,0,5)."</h1>";
    echo "<h1>4.String Position = ".strpos($s1,'t')."</h1>";
    echo "<h1>5.String Replace = ".str_replace('Light','Ligyt',$s1)."</h1>";
    
?>
