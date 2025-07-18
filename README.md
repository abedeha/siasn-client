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
$nip="1991xxxxxxxxxxxx";
$response = $siasn->getDataUtama($nip);

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
├── Config.php         // Konfigurasi credential
├── HttpRequest.php    // Wrapper untuk request GET/POST/DELETE
├── SIASN_Core.php     // Endpoint SIASN
├── TokenManager.php   // Manajemen token OAuth
├── Url.php            // Builder URL endpoint
vendor/                // Composer packages 

```

📚 Fitur Lengkap
🔹 Data Utama
getDataUtama(string $nip)

getDataAnak(string $nip)

getDataPasangan(string $nip)

getDataUtamaGolonganSync(string $orangId)

getDataUtamaJabatanSync(string $orangId)

🔹 Riwayat
getRiwayatIpAsn(string $nip)

getRiwayatAngkaKredit(string $nip)

getRiwayatCltn(string $nip)

getRiwayatPotensi(string $nip)

getRiwayatKompetensi(string $nip)

getRiwayatDiklat(string $nip)

getRiwayatDp3(string $nip)

getRiwayatGolongan(string $nip)

getRiwayatHukdis(string $nip)

getRiwayatJabatan(string $nip)

getRiwayatSertifikasi(string $nip)

getRiwayatKinerjaPeriodik(string $nip)

getRiwayatKursus(string $nip)

getRiwayatMasaKerja(string $nip)

getRiwayatPemberhentian(string $nip)

getRiwayatPendidikan(string $nip)

getRiwayatPenghargaan(string $nip)

getRiwayatPindahInstansi(string $nip)

getRiwayatPnsUnor(string $nip)

getRiwayatPwk(string $nip)

getRiwayatSkp(string $nip)

getRiwayatSkp22(string $nip)

🔹 Dokumen
downloadDok(string $filePath)

🔹 Pengadaan ASN
listPengadaanInstansi(string $tahun, int $limit = 0, int $offset = 100)

🔹 Kenaikan Pangkat
kpInstansiById(string $id, int $limit = 0, int $offset = 100)

listKpInstansi(string $periode, int $limit = 0, int $offset = 100)

uploadDokSkKp(array $form)

🔹 Pensiun
listPensiunInstansi(string $tglAwal, string $tglAkhir)

🔹 Referensi UNOR
refUnor(int $limit = 0, int $offset = 100)

