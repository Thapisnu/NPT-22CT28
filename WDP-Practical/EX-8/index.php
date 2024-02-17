<?php
    
    $c = array(
        "India" => "New Delhi",
        "America" => "New York",
        "Germany" => "Berlin",
        "Russia" => "Moscow",
        "Japan" => "Tokyo",
        "France" => "Paris",
    );

    ksort($c);

    foreach($c as $k => $v)
    {
        echo "<h4>$k = $v</h4>";
    }
    
?>
