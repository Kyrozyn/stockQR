<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;
use App\Models\BarangModel;
use App\Models\StokModel;

class Stok extends BaseController
{
    function checkKodeBarang($kodebarang)
    {
        $barang = new BarangModel();
        $barang->select();
        $barang->where('Kode_Barang', $kodebarang);
        $array = $barang->get();
        if (empty($array->getRowArray())) {
            return 0;
        } else {
            return 1;
        }
    }

    function addStok($kodebarang, $jumlah)
    {
        $stok = new BarangModel();
        $stokku = $stok->where('Kode_Barang', $kodebarang)
            ->first();
        $datadb = $stokku['Jumlah_Stok'];
        $data = [
            'Jumlah_Stok' => $datadb + $jumlah
        ];
        $stok->update($kodebarang, $data);
        return "Stok untuk kode barang $kodebarang Berhasil Ditambah!";
    }

    function delStok($kodebarang, $jumlah)
    {
        $stok = new BarangModel();
        $stokku = $stok->where('Kode_Barang', $kodebarang)
            ->first();
        $datadb = $stokku['Jumlah_Stok'];
        if ($datadb > 0) {
            $data = [
                'Jumlah_Stok' => $datadb - $jumlah
            ];
            $stok->update($kodebarang, $data);
            return "Stok untuk kode barang $kodebarang Berhasil Dikurangi!";
        } else {
            return "Barang habis!";
        }
    }
}