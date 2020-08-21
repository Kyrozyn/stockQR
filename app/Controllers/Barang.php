<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;


class Barang extends BaseController
{

    public function index()
    {
        return view ('barang/index');
    }

    //--------------------------------------------------------------------

    public function barang()
    {
        $crud = new GroceryCrud();
        $crud->setTable('barangs');
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->uniqueFields(['Kode_Barang']);
        $crud->requiredFields(['Kode_Barang','Nama_Barang','Jenis_Barang','Satuan','Merek','Jumlah','Tanggal_Masuk','Tanggal_Keluar']);
        $output = $crud->render();
        return view('render_table', (array)$output);
    }

    private function _exampleOutput($output = null) {
        return view('example', (array)$output);
    }
}
