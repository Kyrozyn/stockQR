<?php

namespace App\Models;

use CodeIgniter\Model;

class StokModel extends Model{
    protected $table = "stoks";
    protected $primaryKey = "Kode_Barang";

    public function getStokWithName(){
        $db      = \Config\Database::connect();
        $builder = $db->table('stoks');
        $builder->select("*");
        $builder->join('barangs','barangs.Kode_Barang = stoks.Kode_Barang');
        $query = $builder->get();
        return $query->getRow();
    }
}
