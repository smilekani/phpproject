<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/trs.css">
  <script src="jquery/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <h3></h3>
      <p></p>
    </div>
    <div class="col-sm-8">
      <a href="phpFileUpload.php"><h3>File Upload</h3></a>
	  <form action="fileupload.php" method="post" enctype="multipart/form-data">Select the File to upload:
		<br><input type="file" name="fileToUpload" id="fileToUpload">
		<br><input type="submit" value="Submit" name="submit">
	</form>
    </div>
    <div class="col-sm-2">
      <h3>Related Topics</h3>        
      <p></p>
    </div>
  </div>
</div>

</body>
</html>
<?php
 $files = glob("images/*.*");
 for ($i=0; $i<count($files); $i++)
  {
	$image = $files[$i];
	$supported_file = array(
			'gif',
			'jpg',
			'jpeg',
			'png'
	 );

	 $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
	 if (in_array($ext, $supported_file)) {
		echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
		 echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
		} else {
			continue;
		}
	  }
   ?>