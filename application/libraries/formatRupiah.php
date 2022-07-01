<?php
defined('BASEPATH') or exit('No direct script access allowed');

class formatRupiah
{
    function rupiah1($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 0, ".", ".");
        return $hasil_rupiah;
    }

    function rupiah2($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 1, ",", ".");
        return $hasil_rupiah;
    }

    function rupiah3($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 2, ".", ",");
        return $hasil_rupiah;
    }
}

?>
/*function rupiah1($angka)
{
$hasil_rupiah = "Rp " . number_format($angka, 0, ".", ".");
return $hasil_rupiah;
}

function rupiah2($angka)
{
$hasil_rupiah = "Rp " . number_format($angka, 1, ",", ".");
return $hasil_rupiah;
}

function rupiah3($angka)
{
$hasil_rupiah = "Rp " . number_format($angka, 2, ".", ",");
return $hasil_rupiah;
}*/