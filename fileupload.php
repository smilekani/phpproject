<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <h3></h3>
      <p></p>
    </div>
    <div class="col-sm-4">
      <a href="fileupload.php"><h3>File Upload</h3></a>
	  <form action="fileupload.php" method="post" enctype="multipart/form-data">Select the File to upload:
		<br><input type="file" name="fileToUpload" id="fileToUpload">
		<br><input type="submit" value="Submit" name="submit">
	</form>
    </div>
	<div class="col-sm-4">
		<a href="listfiles.php">List Files</a></li>
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
$msg="Status is ";
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $msg= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $msg= "Sorry, there was an error uploading your file.";
    }
}
?>