<?php

namespace SiasnClient;

class SIASN_Core
{
    // --- DATA UTAMA
    public static function getDataUtama(string $nip): array
    {
        return HttpRequest::get(Url::dataUtamaUrl($nip));
    }

    public static function getDataAnak(string $nip): array
    {
        return HttpRequest::get(Url::dataAnakUrl($nip));
    }

    public static function getDataPasangan(string $nip): array
    {
        return HttpRequest::get(Url::dataPasanganUrl($nip));
    }

    public static function getDataUtamaGolonganSync(string $orangId): array
    {
        return HttpRequest::get(Url::dataUtamaGolonganSyncUrl($orangId));
    }

    public static function getDataUtamaJabatanSync(string $orangId): array
    {
        return HttpRequest::get(Url::dataUtamaJabatanSyncUrl($orangId));
    }

    // --- RIWAYAT
    public static function getRiwayatIpAsn(string $nip): array
    {
        return HttpRequest::get(Url::riwayatIpAsnUrl($nip));
    }

    public static function getRiwayatAngkaKredit(string $nip): array
    {
        return HttpRequest::get(Url::riwayatAngkaKreditUrl($nip));
    }

    public static function getRiwayatCltn(string $nip): array
    {
        return HttpRequest::get(Url::riwayatCltnUrl($nip));
    }

    public static function getRiwayatPotensi(string $nip): array
    {
        return HttpRequest::get(Url::riwayatPotensiUrl($nip));
    }

    public static function getRiwayatKompetensi(string $nip): array
    {
        return HttpRequest::get(Url::riwayatKompetensiUrl($nip));
    }

    public static function getRiwayatDiklat(string $nip): array
    {
        return HttpRequest::get(Url::riwayatDiklatUrl($nip));
    }

    public static function getRiwayatDp3(string $nip): array
    {
        return HttpRequest::get(Url::riwayatDp3Url($nip));
    }

    public static function getRiwayatGolongan(string $nip): array
    {
        return HttpRequest::get(Url::riwayatGolonganUrl($nip));
    }

    public static function getRiwayatHukdis(string $nip): array
    {
        return HttpRequest::get(Url::riwayatHukdisUrl($nip));
    }

    public static function getRiwayatJabatan(string $nip): array
    {
        return HttpRequest::get(Url::riwayatJabatanUrl($nip));
    }

    public static function getRiwayatSertifikasi(string $nip): array
    {
        return HttpRequest::get(Url::riwayatSertifikasiUrl($nip));
    }

    public static function getRiwayatKinerjaPeriodik(string $nip): array
    {
        return HttpRequest::get(Url::riwayatKinerjaPeriodikUrl($nip));
    }

    public static function getRiwayatKursus(string $nip): array
    {
        return HttpRequest::get(Url::riwayatKursusUrl($nip));
    }

    public static function getRiwayatMasaKerja(string $nip): array
    {
        return HttpRequest::get(Url::riwayatMasaKerjaUrl($nip));
    }

    public static function getRiwayatPemberhentian(string $nip): array
    {
        return HttpRequest::get(Url::riwayatPemberhentianUrl($nip));
    }

    public static function getRiwayatPendidikan(string $nip): array
    {
        return HttpRequest::get(Url::riwayatPendidikanUrl($nip));
    }

    public static function getRiwayatPenghargaan(string $nip): array
    {
        return HttpRequest::get(Url::riwayatPenghargaanUrl($nip));
    }

    public static function getRiwayatPindahInstansi(string $nip): array
    {
        return HttpRequest::get(Url::riwayatPindahInstansiUrl($nip));
    }

    public static function getRiwayatPnsUnor(string $nip): array
    {
        return HttpRequest::get(Url::riwayatPnsUnorUrl($nip));
    }

    public static function getRiwayatPwk(string $nip): array
    {
        return HttpRequest::get(Url::riwayatPwkUrl($nip));
    }

    public static function getRiwayatSkp(string $nip): array
    {
        return HttpRequest::get(Url::riwayatSkpUrl($nip));
    }

    public static function getRiwayatSkp22(string $nip): array
    {
        return HttpRequest::get(Url::riwayatSkp22Url($nip));
    }


    // DOKUMEN
    public static function downloadDok(string $filePath)
    {
        $encodedPath = urlencode($filePath);
        $url = Url::downloadDokUrl($encodedPath);
        return HttpRequest::streamFileToBrowser($url);
    }

    // PENGADAAN

    public static function listPengadaanInstansi(string $tahun, $limit = 0, $offset = 10000): array
    {
        return HttpRequest::get(Url::listPengadaanInstansiUrl($tahun, $limit, $offset));
    }

    // KENAIKAN PANGKAT
    public static function kpInstansiById(string $id, $limit = 0, $offset = 10000): array
    {
        return HttpRequest::get(Url::kpIntansiByIdUrl($id));
    }

    public static function listKpInstansi(string $periode, $limit = 0, $offset = 10000): array
    {
        return HttpRequest::get(Url::listKpInstansiUrl($periode, $limit, $offset));
    }

    public static function uploadDokSkKp($form): array
    {
        return HttpRequest::post(Url::uplodDokSkKpUrl(), $form, 'multipart');
    }

    // PENSIUN
    public static function listPensiunInstansi(string $tglAwal, $tglAkhir): array
    {
        return HttpRequest::get(Url::listPensiunInstansiUrl($tglAwal, $tglAkhir));
    }

    // UNOR
    public static function refUnor($limit = 0, $offset = 10000): array
    {
        return HttpRequest::get(Url::refUnorUrl($limit, $offset));
    }
}
