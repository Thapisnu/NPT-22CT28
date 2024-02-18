<?php

    #Connection To Database
    $user = "light";
    $pass = "light";
    $cn = new PDO("mysql:host=localhost;dbname=EX10",$user,$pass);

    #Selecting Information from Database
    $select = $cn -> prepare("select * from Info");
    $select -> execute();
    $a1 = $select -> fetchAll(PDO::FETCH_NUM);

    #Displaying the Information in a Table
    echo "<form action = data.php method = post><table border = 1>";
    foreach($a1 as $v)
    {
        echo "<tr>";
        foreach($v as $v1)
        {
            echo "<td>$v1</td>";
        }
        echo "<td><button name = i1 type = submit value = $v1>DELETE</button></td>";
        echo "</tr>";
    }
    echo "</table></form>";

    #Deleting Process
    if(isset($_POST['i1']))
    {
        $del = $cn -> prepare("delete from Info where roll = :i1");
        $del -> bindParam(':i1',$_POST['i1']);
        $del -> execute();
        echo $_POST['i1']." Deleted Successfully";
    }

    #Turning Off the Connection
    $cn = null;
    
?>
