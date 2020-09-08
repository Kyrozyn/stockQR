<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = "barangs";
    protected $primaryKey = "Kode_Barang";
    protected $allowedFields = ['Kode_Barang','Nama_Barang','Jenis_Barang','Satuan','Merek','Jumlah_Stok','Tanggal_Masuk','Tanggal_Keluar','Keterangan'];
}