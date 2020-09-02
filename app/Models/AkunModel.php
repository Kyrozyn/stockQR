<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model{
    protected $table = "logins";
    protected $primaryKey = "Username";
    protected $allowedFields = [
        'Username', 'Password', 'No_Induk_Karyawan', 'Jabatan', 'Jenis_Kelamin', 'Jenis_User'
    ];
    public function getLogin($username, $password){
        return $this->db->table($this->table)->where(['Username' => $username, 'Password' => $password])->get()->getRowArray();
    }
}