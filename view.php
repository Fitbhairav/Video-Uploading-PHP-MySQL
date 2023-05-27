<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	<style background-color: orange;>
		body {
		    display: flex;
			background-color: grey;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		video {
			margin-left: 160px;
			width: 500px;
			height: 400px;
		}
		a {
			text-decoration: none;
			color: orange;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	<a href="index.php"><b>UPLOAD VIDEO</b></a>

	<div class="alb">
		<?php 
		 include "db_conn.php";
		 $sql = "SELECT * FROM videos ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>
		 		
	        <video src="db/<?=$video['video_url']?>" 
	        	   controls>
	        	
	        </video>

	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>
</body>
</html>