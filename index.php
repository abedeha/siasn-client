<?php

require __DIR__ . '/vendor/autoload.php';

use SiasnClient\SIASN_Core;

$nip = '1991xxxxxxxxxxx';

$response = SIASN_Core::getDataUtama($nip);
echo json_encode($response);
