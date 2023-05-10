<?php 

namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};
use chillerlan\QRCode\Common\EccLevel;
use chillerlan\QRCode\Data\QRMatrix;
use chillerlan\QRCode\Output\QROutputInterface;

//require_once __DIR__.'/../vendor/autoload.php';

include "./vendor/autoload.php";

$qr_code = filter_input(INPUT_POST, "qr_code", FILTER_SANITIZE_STRING);

echo $qr_code;

$options = new QROptions([
	'version'             => 7,
	'outputType'          => QROutputInterface::GDIMAGE_PNG,
	'eccLevel'            => EccLevel::Q,
	'scale'               => 100,
	'imageBase64'         => false,



]);

$qrcode = (new QRCode($options))->render($qr_code,'vendor/img/imgqrcode/'.$qr_code.'.jpeg');
echo "<br>";
echo '<img src="vendor/img/imgqrcode/'.$qr_code.'.jpeg" alt="QR Code"/ width="500px">';

exit;

 ?>