<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>table show</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container" style="margin-top:20px">
  		<center><font size="6">Performance Table</font></center>
  		<hr>
      <a href="main.php?page=add_per"><button class="btn btn-dark right">Add Task</button></a>
      
  		<div class="table-responsive">
  		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>DAY & NAME</th>
					<th>TASK</th>
					<th>PROGRESS</th>
					<th>STICKER</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$sql = mysqli_query($conn, "SELECT * FROM performance ") or die(mysqli_error($conn));
				
				if(mysqli_num_rows($sql) > 0){
				
					$no = 1;
					
					while($data = mysqli_fetch_assoc($sql)){
						
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['DAY'].'</td>
							<td>'.$data['TASK'].'</td>
							<td>'.$data['PROGRESS'].'</td>
							<td>'.$data['STAR'].'</td>
							<td>
								<a href="main.php?page=edit_per&ID='.$data['ID'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?ID='.$data['ID'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
      
      <center><a href="main.php?page=show_rew" class="btn btn-success btn-sm">Reward</a></center>
  	</div>
    </div>
    
  </body>
</html>
