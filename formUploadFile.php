<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload file trong PHP</title>
</head>
<body>
<?php
  if(isset($_POST['ok'])){ // Người dùng đã ấn submit
      if($_FILES['file']['name'] != NULL){ // Đã chọn file
           // Tiến hành code upload file
		   //if($_FILES['file']['type'] == "image/jpeg"
			//|| $_FILES['file']['type'] == "image/png"
			//|| $_FILES['file']['type'] == "video/mp4"
			//|| $_FILES['file']['type'] == "image/gif"){
			  // là file ảnh
			  // Tiến hành code upload
			  //if($_FILES['file']['size'] > 104857600){
			   //   echo "File không được lớn hơn 1mb";
			 // }else{
			      // file hợp lệ, tiến hành upload
			      $path = "data/"; // ảnh upload sẽ được lưu vào thư mục data
			      $tmp_name = $_FILES['file']['tmp_name'];
				  $file_name_save = "kka".$tmp_name;
			      $name = $_FILES['file']['name'];
			      $type = $_FILES['file']['type']; 
			      $size = $_FILES['file']['size']; 
			      // Upload file
			      move_uploaded_file($tmp_name,$path."kaka".$name);
			      echo "File uploaded! <br />";
			      echo "Tên file : ".$name."<br />";
				  echo "Tên file : ".$path."kaka".$name."<br />";
			      echo "Kiểu file : ".$type."<br />";
			      echo "File size : ".$size;
			  //}
			//}else{
			  // không phải file ảnh
			//  echo "Kiểu file không hợp lệ";
			//}
	  }else{
           echo "Vui lòng chọn file";
      }
  }
?>
<form action="formUploadFile.php" method="post" enctype="multipart/form-data">
	Select file : <input type="file" name="file" size="20" /><br />
    <input type="submit" value="Upload" name="ok" />
</form>
</body>
</html>