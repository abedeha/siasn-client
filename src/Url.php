<?php

namespace SiasnClient;

class Url
{
    // PEGAWAI
    public static function dataUtamaUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/data-utama/' . $nip;
    }

    public static function dataAnakUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/data-anak/' . $nip;
    }

    public static function dataPasanganUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/data-pasangan/' . $nip;
    }

    public static function dataUtamaGolonganSyncUrl(string $orangId): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/data-utama-golongansync/' . $orangId;
    }

    public static function dataUtamaJabatanSyncUrl(string $orangId): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/data-utama-jabatansync/' . $orangId;
    }


    // RIWAYAT
    public static function riwayatIpAsnUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/nilaiipasn/' . $nip;
    }

    public static function riwayatAngkaKreditUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-angkakredit/' . $nip;
    }

    public static function riwayatCltnUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-cltn/' . $nip;
    }

    public static function riwayatPotensiUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-potensi/' . $nip;
    }

    public static function riwayatKompetensiUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-kompetensi/' . $nip;
    }

    public static function riwayatDiklatUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-diklat/' . $nip;
    }

    public static function riwayatDp3Url(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-dp3/' . $nip;
    }

    public static function riwayatGolonganUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-golongan/' . $nip;
    }

    public static function riwayatHukdisUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-hukdis/' . $nip;
    }

    public static function riwayatJabatanUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-jabatan/' . $nip;
    }

    public static function riwayatSertifikasiUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-sertifikasi/' . $nip;
    }

    public static function riwayatKinerjaPeriodikUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-kinerjaperiodik/' . $nip;
    }

    public static function riwayatKursusUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-kursus/' . $nip;
    }

    public static function riwayatMasaKerjaUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-masakerja/' . $nip;
    }

    public static function riwayatPemberhentianUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-pemberhentian/' . $nip;
    }

    public static function riwayatPendidikanUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-pendidikan/' . $nip;
    }

    public static function riwayatPenghargaanUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-penghargaan/' . $nip;
    }

    public static function riwayatPindahInstansiUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-pindahinstansi/' . $nip;
    }

    public static function riwayatPnsUnorUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-pnsunor/' . $nip;
    }

    public static function riwayatPwkUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-pwk/' . $nip;
    }

    public static function riwayatSkpUrl(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-skp/' . $nip;
    }

    public static function riwayatSkp22Url(string $nip): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/rw-skp22/' . $nip;
    }


    // DOKUMEN
    public static function downloadDokUrl(string $filePath): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'download-dok?filePath=' . $filePath;
    }

    // PENGADAAN
    public static function listPengadaanInstansiUrl(string $tahun, $limit, $offset): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pengadaan/list-pengadaan-instansi?tahun=' . $tahun . '&limit=' . $limit . '&offset=' . $offset;
    }

    // KENAIKAN PANGKAT
    public static function kpIntansiByIdUrl(string $idUsulan): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/kp-instansi-byId?IdUsulan=' . $idUsulan;
    }
    public static function listKpInstansiUrl(string $periode, $limit, $offset): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/list-kp-instansi?periode=' . $periode . '&limit=' . $limit . '&offset=' . $offset;
    }

    public static function uplodDokSkKpUrl(): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'upload-dok-sk-kp';
    }

    // PENSIUN
    public static function listPensiunInstansiUrl(string $tglAwal, $tglAkhir): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'pns/list-kp-instansi?tglAwal=' . $tglAwal . '&tglAkhir=' . $tglAkhir;
    }

    // UNOR
    public static function refUnorUrl(string $limit, $offset): string
    {
        $base = (new Config())->base_url;
        return rtrim($base) . 'referensi/ref-unor?limit=' . $limit . '&offset=' . $offset;
    }
}
