<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;


class Permintaan extends BaseController
{

    public function index()
    {
        return view('permintaan/index');
    }

    //--------------------------------------------------------------------

    public function permintaan()
    {
        helper("admin");
        $crud = new GroceryCrud();
        $crud->setTable('permintaans');
        $crud->unsetPrint();
        $crud->unsetExport();
        if (!checkIsAdmin()) {
            $crud->unsetAdd();
            $crud->unsetDelete();
            $crud->unsetEdit();
        }
//        $crud->uniqueFields(['ID_Permintaan']);
        $crud->requiredFields(['Tanggal', 'Nama_Barang', 'Jumlah_Barang', 'Nama_Pemohon']);
        $output = $crud->render();
        return view('render_table', (array)$output);
    }
}