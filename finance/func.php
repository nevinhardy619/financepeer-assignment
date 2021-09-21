<?php
$con=mysqli_connect("localhost","root","","logintb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from log where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:index1.php");
	
}
	else
    {
        echo "<script>alert('Welcome')</script>";
        echo "<script>window.open('index1.php','_self')</script>";
    }
    }

if(isset($_POST['pat_submit']))
{
    
$userId=$_POST['userId'] ?? null;
    $id=$_POST['id'] ?? null;
    $title=$_POST['title'] ?? null;
    $body=$_POST['body'] ?? null;
    $query="insert into json(userId,id,title,body)values('".$userId."','".$id."','".$title."','".$body."')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Values added.')</script>";
      echo "<script>window.open('fi.php','_self')</script>";
       
    }


    } 


?>



