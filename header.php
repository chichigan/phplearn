<?php 
    session_start();

    //Unset session variable 'name' only
    if($_SERVER['QUERY_STRING'] == 'noname'){
        unset($_SESSION['name']);

       //Delete all global session variable
       //session_destroy();

       //Delete cookie
       setcookie('gender','',time()-3600);
    }
    $name = $_SESSION['name'] ?? 'Guest';
    
    echo 'Hello '. htmlspecialchars($name).' ';

    //Get cookie
    $gender = $_COOKIE['gender'] ?? 'Unknown';

    echo '('. htmlspecialchars($gender).')<br>';
?>

<a href="index.php"><span style="float:left;font-size:20px">Ninja Pizza</span></a>
<a href="add.php"><span style="float:right;font-size:20px">Add a Pizza</span></a>
<br>
<br>