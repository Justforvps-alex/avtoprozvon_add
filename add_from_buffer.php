<?php
require_once 'PHPExcel/Classes/PHPExcel.php';
$phpexcel = new PHPExcel(); //Создаем новый Excel файл
$page = $phpexcel->setActiveSheetIndex(0); //Устанавливаем активный лист

$all_phones = $_POST['phones'];
$array_phones=explode("
", $all_phones);
var_dump($array_phones);
$number = count($array_phones);

for($i=0; $i<$number; $i++){
	$row=$i+1;
	$page->setCellValue("A$row", "$array_phones[$i]");
}

$objWriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007'); //Формат
 $objWriter->save("phones_base/table_phones.xlsx");

?>

