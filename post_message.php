<?php 
$con = mysqli_connect("c072um.forpsi.com","f132381","26D7thmq","f132381");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Nebylo možné se připojit k databázi MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['message']) && (($_POST['email']==""))) {
  //pokud se postuje email, je to nejspíše vyplněné botem
    $message = mysqli_real_escape_string($con,$_POST['message']);
    $ins_query="insert into ripomer (`message`) values ('$message')";
    mysqli_query($con,$ins_query) or die(mysqli_error($con));
    echo "1";
} else {
  echo "0";
}   
