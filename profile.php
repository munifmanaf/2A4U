<?php include('config.php'); ?>
<!DOCTYPE html>
<html >
  <head>
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top:20px">
      <center><font size="6">Edit Profile</font><center>
        <hr>

        <?php
        if(isset($_GET['firstname']))
        {
          $firstname = $_GET['firstname'];

          $select = mysqli_query($conn, "SELECT * FROM usertable WHERE firstname = '$firstname'") or die(mysqli_error($conn));

          if(mysqli_num_rows($select) == 0)
          {
            echo '<div class="alert alert-warning">No ID in database</div>';
            exit();
          }else {
            $data = mysqli_fetch_assoc($select);
          }
        } ?>

        <?php
        if(isset($_POST['submit']))
        {
          $lastname = $_POST['lastname'];
          $emailadd = $_POST['emailadd'];
          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = mysqli_query($conn, "UPDATE usertable SET lastname='$lastname', emailadd='$emailadd', username='$username', password='$password' WHERE firstname='$firstname'") or die(mysqli_error($conn));

          if($sql)
          {
            echo '<script>alert("Data successfully saved"); document.location="index.php";</script>';
          }else {
            echo '<div class="alert alert-warning">Fail to edit data</div>';
          }
        } ?>

        <form action="index.php?page=edit_pro&firstname=<?php echo $firstname; ?>" method="post">
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">First Name</label>
            <div class="col-md-6 col-sm-6">
            <input type="text" name="firstname" class="form-control" size="4" value="<?php echo $data['lastname']; ?>"required>
          </div>
        </div>

        <div class="item form-group">
          <label class="col-form-label col-md3 col-sm-3 label-align">Last Name</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" name="lastname" class="form-control" size="4" value="<?php echo $data['lastname']; ?>" required>
          </div>
        </div>

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align">Email Address</label>
          <div class="col-md-6 col-sm-6">
          <input class="form-control" type="email"  name="emailadd" size="4" value="<?php echo $data['emailadd']; ?>" required>
        </div>
      </div>

      <div class="item form-group">
        <label class="col-form-label col-md3 col-sm-3 label-align">Username</label>
        <div class="col-md-6 col-sm-6">
          <input type="text" name="username" class="form-control" size="4" value="<?php echo $data['username']; ?>" required>
        </div>
      </div>

      <div class="item form-group">
        <label class="col-form-label col-md3 col-sm-3 label-align">Password</label>
        <div class="col-md-6 col-sm-6">
          <input type="text" name="password" class="form-control" size="4" value="<?php echo $data['password']; ?>" required>
        </div>
      </div>

      <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
          <input type="submit" name="submit" class="btn btn-primary" value="Save">
          <a href="index.php" class="btn btn-warning">BACK</a>
        </div>
      </div>
  </body>
</html>
