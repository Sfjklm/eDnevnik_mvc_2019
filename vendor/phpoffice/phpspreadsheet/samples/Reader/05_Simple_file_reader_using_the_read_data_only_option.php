<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Helper\Sample;

// require __DIR__ . '/../Header.php';

require_once __DIR__ . '/../src/Bootstrap.php';

$helper = new Sample();

$inputFileType = 'Xlsx';
$inputFileName = __DIR__ . '/sampleData/example1.xlsx';

$helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory with a defined reader type of ' . $inputFileType);
$reader = IOFactory::createReader($inputFileType);
// $helper->log('Turning Formatting off for Load');
$reader->setReadDataOnly(true);
$spreadsheet = $reader->load($inputFileName);

$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
var_dump($sheetData);
