<?php include('config.php');

if(isset($_GET['ID']))
{
  $ID = $_GET['ID'];

  $check = mysqli_query($conn, "SELECT * FROM performance WHERE ID = '$ID'") or die(mysqli_error($conn));

  if (mysqli_num_rows($check)>0)
  {
    $del = mysqli_query($conn, "DELETE FROM performance WHERE ID = '$ID'") or die(mysqli_error($conn));

    if($del)
    {
      echo '<script>alert("Data successfully deleted"); document.location="main.php?page=show_per";</script>';
    }
    else {
      echo '<script>alert("Data cannot be deleted"); document.location="main.php?page=show_per";</script>';
    }
  }
  else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="main.php?page=show_per";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="main.php?page=show_per";</script>';
} ?>
