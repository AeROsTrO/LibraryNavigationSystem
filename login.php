<?php
$servername="localhost";
$username="root";
$pssword="Rahul402!";
$dbname="lns";
//connecting to database
$link=new mysqli($servername, $username, $pssword, $dbname);
$uname=$_POST["username"];
$pwd=$_POST["password"];
if($link->connect_error)
{
    die("connection failed: ".$link->connect_error);
}
else{
    $query="SELECT * FROM users WHERE username='$uname'  AND password='$pwd'";
    $result=$link->query($query);
    if($result){
        if(mysqli_num_rows($result)==1){
            echo "login successful!! Welcome to Library Navigation System";
            header("Location:homePage.php");
        }
        else{
            echo "invalid login credentials or not registered yet";
        }
    }
    $link->close();
   
}

?>