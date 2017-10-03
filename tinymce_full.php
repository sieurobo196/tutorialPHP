<!DOCTYPE html>
<html>
<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<textarea id="my_editor"></textarea>

<iframe id="form_target" name="form_target" style="display:none"></iframe>

<form id="my_form" action="/upload/" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
<input id="image" name="image" type="file">
</form>

<script>
tinymce.init({
    selector: '#my_editor',
    plugins: ["image"],
	// example 
	file_browser_callback: function(field_name, url, type, win) {
     win.document.getElementById(field_name).value = 'data/kakacamera.jpg';
  }
	
    
});
	
</script>

</body>
</html>