<html>
<head>
  <?php
   $servername="localhost";
    $username="root";
    $password="";
    $database='university';
    $conn=new mysqli($servername,$username,$password,$database);
        if(!$conn)
    {
        die("connection Failed");
    }
    echo("successfully<br>");    
    
    $a=$_REQUEST["id"];
    $c=$_REQUEST["name"];
    $b=$_REQUEST["email"];
    $v=$_REQUEST["password"];
    
    $sql= "insert into students values('".$a."','".$c."','".$b."','".$v."')";
    echo "Student id $a<br>";
     echo "Student Name $c<br>";
     echo "Student Email $b<br>";
     echo "Student Password $v<br>";
   if( $conn->query($sql)=== TRUE)
   {echo "Success";
   }
    else
        echo "error";
    

    ?>
    
    </head>
<body>
    </body>
</html>