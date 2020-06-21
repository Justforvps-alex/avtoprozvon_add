<?

require_once 'PHPExcel/Classes/PHPExcel.php';
//if($_POST['enter']){
$id="10"; //айди клиента
$name_file=basename($_FILES['userfile']['name']);
$tmp_name=$_FILES['userfile']['tmp_name'];
if(!file_exists("$id")) 
{ mkdir("$id"); }
$filename="$id/test.xls";
move_uploaded_file($tmp_name, $filename);

$phpexcel = new PHPExcel(); //Создаем новый Excel файл
$page = $phpexcel->setActiveSheetIndex(0); //Устанавливаем активный лист
//Перенос файла в папку

//Подсчет количества номеров в файле

$all_phones='';
$excel = PHPExcel_IOFactory::load($filename);
$number=0;
Foreach($excel ->getWorksheetIterator() as $worksheet) {
$lists[] = $worksheet->toArray();
foreach($lists as $list){
 // Перебор строк
 foreach($list as $row){
   $number++;
   // Перебор столбцов
$all_phones.=$row[0]."
";

}

}
//}
//echo $number;
echo $all_phones;
}

?>
