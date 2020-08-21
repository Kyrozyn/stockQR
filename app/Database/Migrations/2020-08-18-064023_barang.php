<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barang extends Migration
{
	public function up()
	{
        Schema::create('barangs', function (Blueprint $table) { 
            $table->string('Kode_Barang')->primary();
            $table->string('Nama_Barang');
            $table->string('Jenis_Barang');
            $table->string('Satuan');
            $table->string('Merek');
            $table->integer('Jumlah');
            $table->date('Tanggal_Masuk');
            $table->date('Tanggal_Keluar');
            $table->timestamps();
        });
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('barangs');
	}
}
