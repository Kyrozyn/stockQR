<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laporan extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'ID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Tanggal' => [
                'type' => 'DATE'
            ],
            'Kode_Barang' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'Jumlah' => [
                'type' => 'INTEGER',
                'constraint' => 10
            ],
            'Keterangan' => [
                'type' => 'ENUM',
                'constraint' => ['Masuk', 'Keluar'],
            ],
        ]);
        $this->forge->addKey('ID', true);
        $this->forge->createTable('laporans');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('laporans');
	}
}
