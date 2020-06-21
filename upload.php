<?php
session_start();
$id=$_SESSION['user_id'];
//var_dump($_FILES);

$file_type="wav";

$name_file=rand(1000,2000).".".$file_type;

$tmp_name=$_FILES['file']['tmp_name'];

if(!file_exists("/uploads/$id")) 
{ mkdir("/var/www/domains/18online.ru/avtoproxzvon/uploads/$id", 0777); }

$filename="/var/www/domains/18online.ru/avtoproxzvon/uploads/$id/$name_file";


move_uploaded_file($tmp_name, $filename);

if(file_exists($filename) && !empty($_FILES)) {
	echo "uploads/$id/$name_file";
}
else {echo 0;}
?>