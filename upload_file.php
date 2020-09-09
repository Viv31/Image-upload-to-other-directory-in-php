<?php 
if(isset($_POST['but_upload'])){
 
 define("FILE_UPLOADS", "D:/uploads/"); //defining constant for other drive path
  $name = $_FILES['file']['name'];
  
  $target_dir1 = FILE_UPLOADS; //getting constant value in to the variable
  $target_file = $target_dir1 . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir1.$name);
     header("location:index.php?success_msg");
     
  }
 
}



?>