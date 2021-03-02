<?php include('config.php'); ?>

<center><font size="6">Add Reward</font></center>
<hr>

<?php
if (isset($_POST['submit']))
{
  $kid  = $_POST['kid'];
  $week = $_POST['week'];
  $name_file = $_FILES['picture']['name'];
  $source = $_FILES['picture']['tmp_name'];
  $folder = 'pictures/';

  move_uploaded_file($source,$folder.$name_file);

  $insert = mysqli_query($conn,"INSERT INTO tbl_picture (kid, week, file) VALUES ('$kid','$week','$name_file')");

  if($insert)
  {
    echo '<script>alert("Data added successfully"); document.location="main.php?page=show_rew";</script>';
  }
  else
  {
    echo 'Fail to upload data';
  }
}
 ?>

 <form action="main.php?page=add_rew" method="post" enctype="multipart/form-data">
 
 <div class="item form-group">
     <label class="col-form-label col-md-3 col-sm-3 label-align">NAME</label>
     <div class="col-md-6 col-sm-6">
       <input type="text" name="kid" class="form-control" required>
     </div>
   </div>

   <div class="item form-group">
     <label class="col-form-label col-md-3 col-sm-3 label-align">TIME</label>
     <div class="col-md-6 col-sm-6">
       <input type="text" name="week" class="form-control" required>
     </div>
   </div>

   <div class="item form-group">
     <label class="col-form-label col-mf-3 col-sm-3 label-align">REWARD</label>
     <div class="col-md-6 col-sm-6">
  	  <input type="file" name="picture">
     </div>
   </div>

   <div class="item form-group">
     <div class="col-md-6 col-sm-6 offset-md-3">
       <input type="submit" name="submit" value="Save" class="btn btn-primary">
     </div>
   </div>
 </form>
