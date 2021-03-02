<?php include('config.php'); ?>

<center><font size="6">Add Task</font></center>
<hr>

<?php
if (isset($_POST['submit']))
{
  
  
  $DAY      = $_POST['DAY'];
  $TASK     = $_POST['TASK'];
  $PROGRESS = $_POST['PROGRESS'];
  $STAR     = $_POST['STAR'];

  $check = mysqli_query($conn, "SELECT * FROM performance WHERE DAY= '$DAY'") or die(mysqli_error($conn));

  if(mysqli_num_rows($check) == 0)
  {
    $sql = mysqli_query($conn, "INSERT INTO performance( DAY, TASK, PROGRESS, STAR) VALUES ( '$DAY', '$TASK', '$PROGRESS', '$STAR')") or die(mysqli_error($conn));

    if($sql)
    {
      echo '<script>alert("Data added successfully"); document.location="main.php?page=show_per";</script>';
    }
    else
    {
      echo '<div class="alert alert-warning">Fail to add data</div>';
    }
  }
  else
  {
      echo '<div class="alert alert-warning"> Data already registered</div>';
  }
 
} ?>

<form action="main.php?page=add_per" method="post">
  
  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">DAY & NAME</label>
    <div class="col-md-6 col-sm-6">
      <input type="text" name="DAY" class="form-control" size="4" required>
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">TASK</label>
    <div class="col-md-6 col-sm-6">
      <input type="text" name="TASK" class="form-control" required>
    </div>
    <a href="main.php?page=chore" class="btn btn-success btn-sm">Suitable Chores</a>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm3 label-align">PROGRESS</label>
    <div class="col-md-6 col-sm-6">
      <select class="form-control" name="PROGRESS">
        <option value="NOT DONE">NOT DONE</option>
      </select>
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm3 label-align">STICKER</label>
    <div class="col-md-6 col-sm-6">
      <select class="form-control" name="STAR">
        <option value="NO STAR">NO STAR</option>
      </select>
    </div>
  </div>

 

  <div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-3">
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
</div>

</form>
