<?php include('config.php');

?>
 <?php
    if(isset($_GET['id']))
    {
      $id = $_GET['id'];

      $select = mysqli_query($conn, "SELECT*FROM tbl_picture WHERE id = '$id'") or die(mysqli_error($conn));

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
      $kid = $_POST['kid'];    
      $week = $_POST['week'];
      $name_file = $_FILES['picture']['name'];
      $source = $_FILES['picture']['tmp_name'];
      $folder = 'pictures/';

      if($name_file !='')
      {
        move_uploaded_file($source,$folder.$name_file);
        $update = mysqli_query($conn,"UPDATE tbl_picture SET kid = '$kid', week = '$week', file = '$name_file' WHERE id = '$id' ");

        if($update)
        {
          echo '<script>alert("Reward Successfully Updated"); document.location="main.php?page=show_rew";</script>';
        }else {
          echo '<div class="alert alert-warning">Fail to edit data</div>';
        }
      }
    } ?>

<div class="container" style="margin-top:20px">
  <center><font size="6">Edit Info</font></center>
  <hr>

     <form action="main.php?page=edit_rew&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
         
         <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align">NAME</label>
         <div class="col-md-6 col-sm-6">
           <input type="text" name="kid" class="form-control" size="4" value="<?php echo $kid ?>" required>
         </div>
       </div>
       
       <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align">TIME</label>
         <div class="col-md-6 col-sm-6">
           <input type="text" name="week" class="form-control" size="4" value="<?php echo $week ?>" required>
         </div>
       </div>

       <div class="item form-group">
        <label class="col-form-label col-mf-3 col-sm-3 label-align">REWARD</label>
        <div class="col-md-6 col-sm-6">
          <input type="hidden" name="img" value="<?php echo $file ?>" required>
  	      <input type="file" name="picture">
        </div>
        </div>


       <div class="item form-group">
         <div class="col-md-6 col-sm-6 offset-md-3">
           <input type="submit" name="submit" class="btn btn-primary" value="Update">
           <a href="main.php?page=show_rew" class="btn btn-warning">BACK</a>
         </div>
       </div>

     </form>
</div>

