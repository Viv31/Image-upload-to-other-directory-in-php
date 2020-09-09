<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload image to other directory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightblue;"> 
<div class="container" >
	<div class="row" style="margin-top: 50px;">
		<div class="col-md-6 mx-auto">
<?php 
if(isset($_GET['success_msg'])){
	echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong>Upload Successfully
</div>';

}

?>
<div class="jumbotron">
  <h5>Upload image to other directory's Uploads folder (here D:/uploads/)</h5>
  <form method="post" action="upload_file.php" enctype='multipart/form-data'>
<div class="form-group">
	<input type='file' name='file' class="form-control"/>
</div>

  
  <input type='submit' value='Save name' name='but_upload' class="btn btn-success">
</form>
</div>
</div>
</div>
</div>
</body>
</html>