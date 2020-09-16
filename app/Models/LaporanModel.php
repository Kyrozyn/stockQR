<?php


namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = "laporans";
    protected $primaryKey = "ID";
    protected $allowedFields = ['Tanggal', 'Kode_Barang', 'Jumlah', 'Keterangan'];
}