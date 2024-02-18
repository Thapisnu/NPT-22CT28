<html>
    <head>
        <title>EX-10</title>
    </head>
    <body>
        <form action = "index.php" method = "post">
            <input type = "text" name = "i1" placeholder = "Name"><br><br>
            <input type = "text" name = "i2" placeholder = "RollNo"><br><br>
            <input type = "submit" name = "s1">
        </form>
    </body>
</html>
<?php

    if(isset($_POST['s1']))
    {
        #On Success Confirmation
        echo "Data Submited Successfully";

        #Variable Initialization 
        $i1 = $_POST['i1'];
        $i2 = $_POST['i2'];

        #Database Connection
        $name = 'light';
        $pass = 'light';
        $cn = new PDO("mysql:host=localhost;dbname=EX10",$name,$pass);

        #Inserting Values using Prepared Statements
        $ins = $cn -> prepare("insert into Info(name,roll) values(:n,:r)");
        $ins -> bindParam(":n",$i1);
        $ins -> bindParam(":r",$i2);
        $ins -> execute();

        #To Turn Off the Connection
        $cn = null;
    }
    
?>
