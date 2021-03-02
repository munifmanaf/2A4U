<?php include('config.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];

  $check = mysqli_query($conn, "SELECT * FROM tbl_picture WHERE id = '$id'") or die(mysqli_error($conn));

  if (mysqli_num_rows($check)>0)
  {
    $del = mysqli_query($conn, "DELETE FROM tbl_picture WHERE id = '$id'") or die(mysqli_error($conn));

    if($del)
    {
      echo '<script>alert("Data successfully deleted"); document.location="main.php?page=show_rew";</script>';
    }
    else {
      echo '<script>alert("Data cannot be deleted"); document.location="main.php?page=show_rew";</script>';
    }
  }
  else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="main.php?page=show_rew";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="main.php?page=show_rew";</script>';
} ?>