# SIASN Client PHP Library

Library PHP untuk integrasi dengan layanan **SIASN BKN** menggunakan API resmi. Library ini mendukung autentikasi token, pengambilan data ASN, serta download dokumen dan file.

## 📦 Instalasi

Gunakan [Composer](https://getcomposer.org/) untuk menginstal:

```bash
composer require abedeha/siasn-client
```
Atau, jika mengembangkan secara lokal:
```
git clone https://github.com/abedeha/siasn-client.git
cd siasn-client
composer install
```
Ubah file konfigurasi di src/Config.php

```
 $this->client_id     = 'CLIENT ID ANDA';
        $this->consumer_key = 'CONSUMER KEY ANDA';
        $this->consumer_secret = 'CONSUMER SECRET ANDA';
        $this->token_sso = 'TOKEN SSO ANDA';
        $this->token_url     = 'URL UNTUK MENGAMBIL TOKEN';
        $this->base_url      = 'BASE URL BKN';
```

Contoh: Mendapatkan Data Utama ASN
```
use SiasnClient\SIASN_Core;

require 'vendor/autoload.php';

$siasn = new SIASN_Core();
$response = $siasn->getDataUtama('1991xxxxxxxxxxx');

print_r($response);
```

Contoh: Download Dokumen
```
$filepath ="xxxxxxxxxxxxxxxxx";
$siasn->downloadDokumenToBrowser($filepath);
```

Struktur Folder 

```
src/
├── Config.php         // Konfigurasi credential (jangan diupload)
├── HttpRequest.php    // Wrapper untuk request GET/POST/DELETE
├── SIASN_Core.php     // Endpoint SIASN
├── TokenManager.php   // Manajemen token OAuth
├── Url.php            // Builder URL endpoint
downloads/             // Tempat simpan file PDF (opsional)
vendor/                // Composer packages (ignored di Git)

```

