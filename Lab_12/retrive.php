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
 
    
    $sql= "select * from students";

  $result= $conn->query($sql);
 if($result->num_rows>0)
 {
    while($row=$result-> fetch_assoc())
        
    {"
    <table boder=2px>
    <tr>
        ID
        </tr>
        <tr>
        Name
        </tr>
    <tr>Email</tr>
        <tr>Password</tr>
    
      <td> $row['ID'] </td>
    <td>  $row['Name' ]</td>
    <td>  $row['Email']</td>
    <td> $row['Password']</td>
    }
 }  </table>"
    
   
    else
        echo "NO Data";

    ?>
    
    
    </head>
<body>
    
  
    </body>
</html>