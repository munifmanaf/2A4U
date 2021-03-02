<?php
session_start();
include('config.php');

if (isset($_POST['username'])){
  $username  =$_POST['username'];
  $password  =$_POST['password'];

$result = mysqli_query($conn,"SELECT * FROM usertable WHERE username = '$username'") or die (mysqli_error($conn));

    if (mysqli_num_rows($result) > 0)
       {
          $_SESSION['userlogin'] = $username;
           echo 'Success';
         }
          else {
             echo 'No user for the combo';
           }
}
else {
  echo 'There were errors while connecting to database';
}

?>
