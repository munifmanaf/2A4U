<?php

 $conn = mysqli_connect("localhost","root","","useraccount_db");


 if (mysqli_connect_errno()){

   echo "Fail to connect to MySQL: ".mysqli_connect_error();
 }
 ?>
