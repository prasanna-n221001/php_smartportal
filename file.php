<?php
/*
$file=fopen("data.txt",'r');
#echo filesize("data.txt");
$content=fread($file,filesize("data.txt"));


$file=fopen("data.txt",'w');
$content2=fwrite($file,"new content is plcaed");


$file=fopen("data.txt",'w');
echo file_get_contents('data.txt');
fclose($file);

$file=fopen("data.txt",'w');
file_put_contents("data.txt","this is new content",FILE_APPEND);
fclose($file);

echo file_get_contents("data.txt");

$lines=file("data.txt");
print_r($lines);

if(file_exists("data.txt")){
    echo "file exists<br>";
}
echo filesize("data.txt")."<br>";
echo filetype("data.txt")."<br>";
echo date("Y-m-d H:i:s",fileatime("data.txt"))."<br>";
echo date("Y-m-d H:i:s",filemtime("data.txt"))."<br>";
echo date("Y-m-d H:i:s",filectime("data.txt"))."<br>";
echo substr(sprintf('%o', fileperms("data.txt")), -4)."<br>";
echo fileowner("data.txt")."<br>";
echo filegroup("data.txt")."<br>";
echo fileinode("data.txt")."<br>";
copy("data.txt","data_copy.txt");
rename("data_copy.txt","data_renamed.txt");
#delete("data_renamed.txt");
#mkdir("new_folder");
#rmdir("new_folder");
if(is_file("data.txt")){
    echo "data.txt is a file<br>";
}
if(is_dir("new_folder")){
    echo "new_folder is a directory<br>";
}
    
$files=scandir(".");
print_r($files);
$dir=opendir(".");
while($file=readdir($dir)!==false){
    echo $file."<br>";
}
    
echo getcwd();
#chdir("uoploads");
#echo getcwd();

echo "<h3>Files in current directory</h3>";
$files=scandir(".");
foreach($files as $file){
    echo $file."<br>";
}
    
#task3
$file=fopen("data.txt",'r');
$content=fread($file,filesize("data.txt"));
echo $content;
fclose($file);

$file=fopen("data.txt",'r+');
$content=fread($file,filesize("data.txt"));
$new_content=fwrite($file,"new content");
echo $content;
fclose($file);

$file=fopen("data.txt",'w');
$content=fwrite($file,"new content added");
fclose($file);

$file=fopen("data.txt",'w+');
$content=fread($file,filesize("data.txt"));
echo $content;
$content=fwrite($file,"new content added");
fclose($file);

$file=fopen("data.txt",'a');
fwrite($file,"new content added successfully");
fclose($file);

$file=fopen("data.txt",'a+');
$content=fread($file,filesize("data.txt"));
echo $content;
fwrite($file,"new content added");
fclose($file);

$file=fopen("data1.txt",'x+');
$content=fread($file,filesize("data.txt"));
echo $content;
fwrite($file,"new content added successfully");
fclose($file);

$file=fopen("data2.txt",'x');
fwrite($file,"new content added successfully");
fclose($file);
*/

?>

