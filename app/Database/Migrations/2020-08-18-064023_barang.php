<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Kode_Barang' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'Nama_Barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Jenis_Barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Satuan' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'Merek' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'Jumlah_Stok' => [
                'type' => 'INTEGER',
                'constraint' => 10
            ],
            'Tanggal_Masuk' => [
                'type' => 'DATE',
            ],
            'Tanggal_Keluar' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('Kode_Barang', true);
        $this->forge->createTable('barangs');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('barangs');
    }
}
