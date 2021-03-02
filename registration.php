<?php include('config.php'); ?>
<html>
  <head>

    <title>2A (Akhlak & Akademik) Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
    <div>
    <?php
    if (isset($_POST['create'])){
      $firstname =$_POST['firstname'];
      $lastname  =$_POST['lastname'];
      $emailadd  =$_POST['emailadd'];
      $username  =$_POST['username'];
      $password  =$_POST['password'];

      $check = mysqli_query($conn,"SELECT * FROM usertable WHERE firstname = '$firstname'") or die (mysqli_error($conn));

         if (mysqli_num_rows($check) == 0)
            {
             $sql  = mysqli_query($conn,"INSERT INTO usertable (firstname, lastname, emailadd, username, password) VALUES ('$firstname','$lastname','$emailadd','$username','$password')") or die (mysqli_error($conn));

            if($sql)
              {
                echo '<script>alert("Data added successfully");</script>';

              }
               else {
                  echo 'Data failed to add due to errors';

    }
  }
}
     ?>
   </div>
   <div>
   <form action="registration.php" method="post">
    <div class="header">
      <div class="row">
        <div class="col-sm-3">
      <h1>Registration</h1>
      <p>Fill up the form with correct value.</p>
      <hr class="mb-3"></hr>
      <label for="firstname"><b>First Name</b></label>
      <input  class="form-control" id="firstname" type="text"  name="firstname" required>

      <label for="lastname"><b>Last Name</b></label>
      <input class="form-control" id="lastname" type="text"  name="lastname" required>

      <label for="emailadd"><b>Email</b></label>
      <input class="form-control" id="emailadd" type="email"  name="emailadd" required>

      <label for="username"><b>Username</b></label>
      <input class="form-control" id="username" type="text" name="username" required>

      <label for="password"><b>Password</b></label>
      <input class="form-control" id="password" type="password" name="password" required>
      <hr class="mb-3"></hr>
      <input class="btn btn-primary "type="submit" id="register" name="create" value="Sign Up">
      <a href="login.php" class="btn btn-warning">Log In</a>
    </div>
  </div>
    </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    $(function()
       {
         $('#register').click(function(e){

              var valid = this.form.checkValidity();
              if (valid){

                var firstname = $('#firstname').val();
                var lastname  = $('#lastname').val();
                var emailadd  = $('#emailadd').val();
                var username  = $('#username').val();
                var password  = $('#password').val();
                    e.preventDefault();

                    $.ajax({
                      type:'POST',
                      url:'process.php',
                      data:{firstname: firstname,lastname: lastname,emailadd: emailadd,username: username,password: password},
                      success: function(data){
                        Swal.fire(
                           'Successful',
                           'Successfully registered',
                           'success'
                        )
                      },
                      error: function(data){
                        Swal.fire(
                            title: 'Errors',
                            text: 'Errors saving data',
                            type: 'error'
                        )
                      }
                    });
              }else{
              }


         });


       });
     </script>
    </body>
</html>
