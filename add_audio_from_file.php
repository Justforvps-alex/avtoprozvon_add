<?php
session_start();
$id=$_SESSION['user_id'];
//var_dump($_FILES);
if($_FILES['audiofile']['type']=="audio/mpeg"){$file_type="mp3";}
if($_FILES['audiofile']['type']=="audio/ogg"){$file_type="ogg";}
if($_FILES['audiofile']['type']=="audio/wav"){$file_type="wav";}
else{$file_type="wav";}

$name_file=rand(1,1000).".".$file_type;

$tmp_name=$_FILES['audiofile']['tmp_name'];

if(!file_exists("uploads/$id")) 
{ mkdir("uploads/$id", 7777); }
$filename="uploads/$id/$name_file";


move_uploaded_file($tmp_name, $filename);

if(file_exists($filename) && !empty($_FILES)) {
	echo "uploads/$id/$name_file";
}
else {echo 0;}
?>