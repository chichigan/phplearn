<?php 
    if(isset($_POST['submit'])){
        //Session for name
        session_start();

        $_SESSION['name'] = $_POST['name'];

        //Cookie for gender
        setcookie('gender',$_POST['gender'],time() + 86400);

        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sandbox.php" method="post">
        <input type="text" name="name">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>