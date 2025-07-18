<?php

require __DIR__ . '/vendor/autoload.php';

use SiasnClient\SIASN_Core;

$nip = '1991xxxxxxxxxxxxxxxx';
$orangID = 'xxxxxxxxxxxxxxxxxxxxxxx';
$filePath = 'path dokumen';

// non file
$response = SIASN_Core::getRiwayatAngkaKredit($nip);
echo json_encode($response);

// file
$response = SIASN_Core::downloadDok($filePath);
echo $response;
