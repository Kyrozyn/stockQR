<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Permintaan extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'ID_Permintaan'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Tanggal' => [
                'type' => 'Date',
            ],
            'Nama_Barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Jumlah_Barang' => [
                'type' => 'INTEGER',
                'constraint' => 10,
            ],
            'Nama_Pemohon' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('ID_Permintaan', true);
        $this->forge->createTable('permintaans');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('permintaans');
	}
}
