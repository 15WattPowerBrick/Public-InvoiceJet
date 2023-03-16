<?php

//get form values
$companyName = $_POST["companyName"];
$addressLineOne = $_POST["addressLineOne"];
$addressLineTwo = $_POST["addressLineTwo"];
$yourName = $_POST["yourName"];
$phoneAndEmail = $_POST["phoneAndEmail"];
$clientName = $_POST["clientName"];
$clientAddressLineOne = $_POST["clientAddressLineOne"];
$clientAddressLineTwo = $_POST["clientAddressLineTwo"];
$invoiceNo = $_POST["invoiceNo"];
$invoiceDate = $_POST["invoiceDate"];
$dueDate = $_POST["dueDate"];

require __DIR__ . "/../vendor/autoload.php";
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);
$dompdf = new Dompdf($options);
$dompdf->setPaper("A4");

$html = file_get_contents("standard-invoice-template.html");

$html = str_replace(["{{ companyName }}","{{ addressLineOne }}","{{ addressLineTwo }}","{{ yourName }}","{{ phoneAndEmail }}","{{ clientName }}","{{ clientAddressLineOne }}","{{ clientAddressLineTwo }}","{{ invoiceNo }}","{{ invoiceDate }}","{{ dueDate }}"],
                    [$companyName,$addressLineOne,$addressLineTwo,$yourName,$phoneAndEmail,$clientName,$clientAddressLineOne,$clientAddressLineTwo,$invoiceNo,$invoiceDate,$dueDate], 
                    $html);

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("invoice.pdf", ["Attachment" => 0]);