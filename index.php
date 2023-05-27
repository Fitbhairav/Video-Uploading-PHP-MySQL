<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>video upload php and mysql</title>
	<style>
		body {
			display: flex;
			background-color: orange;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
		input {
			margin-left: 200px;
			font-size: 2rem;
		}
		a {
			text-decoration: none;
			color: black;
			margin-bottom: 40px;
			font-size: 1.5rem;
		}
		footer{
			margin-top: 500px;
		}
	</style>
</head>
<body>
	<a href="view.php"><b>Videos</b></a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_video">
        <br></br>
	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>
	 <footer>
		<b>Copyright @ Bhairav Jangid</b>
	 </footer>
</body>
</html>