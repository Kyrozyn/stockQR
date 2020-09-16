<?php


namespace App\Models;

use CodeIgniter\Model;

class PermintaanModel extends Model
{
    protected $table = "permintaans";
    protected $primaryKey = "ID_Permintaan";
    protected $allowedFields = ['Tanggal', 'Nama_Barang', 'Jumlah_Barang', 'Nama_Pemohon'];
}