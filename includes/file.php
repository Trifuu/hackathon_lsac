<?php

require_once 'Class/PHPExcel.php';

$outFileName="da.xlxs";
$excel=new PHPExcel();
$excel->setActiveSheetIndex(0)
    ->setCellValue("A1","Hello")
    ->setCellValue("B1","World");
    
$file= PHPExcel_IOFactory::createWriter($excel,"Excel2007");echo "merge";
header('Content-Type: application/xlsx');
    header('Content-Disposition: attachment;filename="' . $outFileName . '"');
    header('Cache-Control: max-age=0');



echo "merge";
?>
