<?php
if(isset($_POST['b1']))
{
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['message'];
$conn=new mysqli("localhost","root","","sbtbsphp");
if($conn==TRUE)
{
    $cmd="INSERT INTO contact VALUES('$a','$b','$c')";
    if($conn->query($cmd)==TRUE)
    {
        echo "Successfully submitted";
    }
    else{
        echo "Query problems";
    }
}
else{
    echo "Connection Problems";
}
}
?>