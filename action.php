<?php
session_start();
$connect =mysqli_connect("localhost","root","","new_project");
if(isset($_POST["username"]))
{
    $query="SELECT * FROM users WHERE admin_name='"$_POST["username"]."' AND admin_password = '".$_POST["password"]."'";
    $result=mysqli_query($connect,$query);
    if(mysql_num_rows($result) > 0)
    {
        $_SESSION["username"]=$_POST["username"];
        echo 'Yes';
    }
    else
    {
        echo 'No';
    }

}
?>
