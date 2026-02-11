<?php 
$uploaded_file="";
if(isset($_POST['upload'])){
    $file_name=$_FILES['myfile']['name'];
    $file_tmp=$_FILES['myfile']['tmp_name'];
    $upload_path="uploads/".$file_name;
    if(move_uploaded_file($file_tmp,$upload_path)){
        $uploaded_file=$file_name;
        echo "file uploaded successfully<br>";
    }else{
        echo "upload failed";
    }
}
?>
<html>
<body>
    <form method="POST" enctype="multipart/form-data">
    select file:
<input type="file" name="myfile" required><br>
<button type="submit" name="upload">Upload</button>
</form>

<?php 
if($uploaded_file){
    echo "<br><a href='download.php?file=$uploaded_file'>Download file</a>";
}
?>
</body>
</html>