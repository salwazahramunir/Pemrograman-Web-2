<?php
    function hitungUmur($tahun_lahir) {
        $tahun_sekarang = 2023;

        // $umur = $tahun_sekarang - $tahun_lahir;

        return $tahun_sekarang - $tahun_lahir;
    }

    echo "Umur saya adalah " . hitungUmur(2004) . " tahun.";
?>