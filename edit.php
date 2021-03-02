<?php include('config.php'); ?>
<html>
  <head>
     <meta charset = "UTF-8">
    <link rel="stylesheet" href="css/show.css">
  </head>
  <body>
  <div class="container" style="margin-top:20px">
  <center><font size="6">Edit table</font><center>
    <hr>
    <center>
      <div class="content">
      <p><h2>Stickers</h2></p>
      <p>😠 = <span>Never do the chore</span></p>
      <p>😐 = <span>Done, but not too good</span></p>
      <p>😊 = <span>Nice. Improve your effort in the future</span></p>
      <p>😍 = <span>Great work my love</span></p>
      <p>🌟 = <span>Excellent. You deserve to get what you want</span></p>
      </div>
      </center>
    <?php
    if(isset($_GET['ID']))
    {
      $ID = $_GET['ID'];

      $select = mysqli_query($conn, "SELECT * FROM performance WHERE ID = '$ID'") or die(mysqli_error($conn));

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
      
      $DAY = $_POST['DAY'];
      $TASK = $_POST['TASK'];
      $PROGRESS = $_POST['PROGRESS'];
      $STAR = $_POST['STAR'];

      $sql = mysqli_query($conn, "UPDATE performance SET DAY='$DAY', TASK='$TASK', PROGRESS='$PROGRESS', STAR='$STAR' WHERE ID='$ID'") or die(mysqli_error($conn));

      if($sql)
      {
        echo '<script>alert("Data successfully saved"); document.location="main.php?page=show_per";</script>';
      }else {
        echo '<div class="alert alert-warning">Fail to edit data</div>';
      }
    } ?>

    <form action="main.php?page=edit_per&ID=<?php echo $ID; ?>" method="post">
    
    
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">DAY & NAME</label>
        <div class="col-md-6 col-sm-6">
        <input type="text" name="DAY" class="form-control" size="4" value="<?php echo $data['DAY']; ?>">
      </div>
    </div>

    <div class="item form-group">
      <label class="col-form-label col-md3 col-sm-3 label-align">TASK</label>
      <div class="col-md-6 col-sm-6">
        <input type="text" name="TASK" class="form-control" size="4" value="<?php echo $data['TASK']; ?>" required>
      </div>
    </div>

    <div class="item form-group">
      <label class="col-form-label col-md-3 col-sm-3 label-align">PROGRESS</label>
      <div class="col-md-6 col-sm-6">
      <select name="PROGRESS" class="form-control" required>
        <option value="NOT DONE" <?php if($data['NOT DONE'] == 'NOT DONE') {echo 'selected';} ?>>NOT DONE</option>
        <option value="DONE" <?php if($data['DONE'] == 'DONE') {echo 'selected';} ?>>DONE</option>
        
      </select>
    </div>
  </div>

  <div class="item form-group">
      <label class="col-form-label col-md-3 col-sm-3 label-align">STICKER</label>
      <div class="col-md-6 col-sm-6">
      <select name="STAR" class="form-control" required>

        
        <option value="😠" <?php if($data['😠'] == '😠') {echo 'selected';} ?>>😠</option>
        <option value="😐😐" <?php if($data['😐😐'] == '😐😐') {echo 'selected';} ?>>😐😐</option>
        <option value="😊😊😊" <?php if($data['😊😊😊'] == '😊😊😊') {echo 'selected';} ?>>😊😊😊</option>
        <option value="😍😍😍😍" <?php if($data['😍😍😍😍'] == '😍😍😍😍') {echo 'selected';} ?>>😍😍😍😍</option>
        <option value="🌟🌟🌟🌟🌟" <?php if($data['🌟🌟🌟🌟🌟'] == '🌟🌟🌟🌟🌟') {echo 'selected';} ?>>🌟🌟🌟🌟🌟</option>
        
      </select>
    </div>
  </div>

 

  <div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-3">
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
      <a href="main.php?page=show_per" class="btn btn-warning">BACK</a>
    </div>
  </div>

</form>
</div>

  </body>
</html>
