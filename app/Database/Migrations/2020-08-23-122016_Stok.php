<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stok extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'Kode_Barang' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'Jumlah' => [
                'type' => 'INTEGER'
            ]
        ]);
        $this->forge->addForeignKey('Kode_Barang','barangs','Kode_Barang','CASCADE','CASCADE');
        $this->forge->createTable('stoks');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('stoks');
	}
}
