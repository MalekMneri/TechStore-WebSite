<?php
include "../core/clientC.php";
$host="localhost";
$user="root";
$password="";
$db="2a7";

$con = mysqli_connect($host,$user,$password,$db);


if(isset($_POST['email'])){

    $sql="select * from client where email='".$_POST['email']."'AND mdp='".$_POST['mdp']."' limit 1";

    $result=mysqli_query($con,$sql);

    if(!$result || mysqli_num_rows($result) == 1)
    {
        session_start();
        $_SESSION['email']=$_POST['email'];
        header("location:index.php");
        exit();
    }
    else{
        echo "You Have Entered Incorrect Password";
        exit();
    }

   }
?>
