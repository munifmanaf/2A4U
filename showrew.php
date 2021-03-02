<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container" style="margin-top:20px">
      <center><font size="6">Reward Table</font></center>
      <hr>
      <a href="main.php?page=add_rew"><button class="btn btn-dark right">Add Reward</button></a>
      
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <tr>
              <td>NAME</td>
              <td>TIME</td>
              <td>REWARD</td>
              <td>REDEEM REWARD<td>
              <td>ACTION</td>
            </tr>
          <?php
          $query = mysqli_query($conn,"SELECT * FROM tbl_picture");
          while($row = mysqli_fetch_array($query)){
            ?>
           <tr>
           <td><?php echo $row['kid']?></td>
           <td><?php echo $row['week']?></td>
           <td><img src="pictures/<?php echo $row['file']?>" width="200px" height="200px"></td>
           <td><button type="button" onclick="Redeem()" class="btn btn-success btn-sm">Redeem</button><td>
           <td><a href="main.php?page=edit_rew&id=<?php echo $row['id']; ?>" class="btn btn-secondary btn-sm"">Edit</a>
           <a href="deleterew.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure?\')">Delete</a></td>
         </tr>
          <?php }?>
        </table>

      </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
      function Redeem()
      {
        Swal.fire(
        'Good job!',
        'Enjoy Your Reward',
        'success'
        )
      }
    </script>

  </body>
</html>