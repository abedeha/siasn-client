<?php

require __DIR__ . '/vendor/autoload.php';

use SiasnClient\SIASN_Core;

$nip = '199101052015031001';
$orangID = '0CA7CD787AAA7C23E050640A15023707';
$filePath = 'peremajaan/usulan/000000006e640bf0016e651d9dda110c_20240807_052408_filepak-f94d895c-547c-11ef-9c11-0a580a8205cc.pdf';

$response = SIASN_Core::getDataUtama($nip);
echo json_encode($response);
