<?php include('config.php');?>
<?php
if (isset($_POST['create'])){
  $firstname =$_POST['firstname'];
  $lastname  =$_POST['lastname'];
  $emailadd  =$_POST['emailadd'];
  $username  =$_POST['username'];
  $password  =sha1($_POST['password']);

  $check = mysqli_query($conn,"SELECT * FROM usertable WHERE firstname = '$firstname'") or die (mysqli_error($conn));

     if (mysqli_num_rows($check) == 0)
        {
         $sql  = mysqli_query($conn,"INSERT INTO usertable (firstname, lastname, emailadd, username, password) VALUES ('$firstname','$lastname','$emailadd','$username','$password')") or die (mysqli_error($conn));

        if($sql)
          {
            echo 'Data added succesfully.';

          }
           else {
              echo 'Data failed to add due to errors';

}
}
}else{
  echo 'No data';
}
?>
