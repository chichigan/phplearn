 <?php
    $conn=new mysqli('localhost','gan','test1234','ninja_pizza');

    if(!$conn){
       echo 'Connection error: '.mysqli_connect_error();
    }
 ?>