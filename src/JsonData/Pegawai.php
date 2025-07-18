<?php

namespace SiasnClient\JsonData;

class Pegawai
{
    public static function format(array $data): array
    {
        // Contoh payload standar
        return [
            'nip'        => $data['nip'],
            'nama'       => $data['nama'],
            'jabatan'    => $data['jabatan'],
            'unit_kerja' => $data['unit_kerja'],
        ];
    }
}
