<?php namespace App\Database\Migrations;

use App\Models\AkunModel;
use CodeIgniter\Database\Migration;

class Login extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'Username' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'Password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'No_Induk_Karyawan' => [
                'type' => 'INTEGER',
                'constraint' => 255,
            ],
            'Jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Jenis_Kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['Laki-Laki','Perempuan'],
            ],
            'Jenis_User' => [
                'type' => 'ENUM',
                'constraint' => ['Admin','User'],
            ]
        ]);
        $this->forge->addKey('Username', true);
        $this->forge->createTable('logins');
        $akun = new AkunModel();
        $akun->insert(['Username' => 'admin',
            'Password' => 'admin',
            'No_Induk_Karyawan' => '111111',
            'Jabatan' => 'admin',
            'Jenis_Kelamin' => 'Laki-Laki',
            'Jenis_User' => 'Admin']
        );
        $akun->insert([
            'Username' => 'user',
            'Password' => 'user',
            'No_Induk_Karyawan' => '222222',
            'Jabatan' => 'user',
            'Jenis_Kelamin' => 'Laki-Laki',
            'Jenis_User' => 'User'
        ]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('logins');
	}
}
