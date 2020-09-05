<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;
use App\Models\BarangModel;

class Barang extends BaseController
{

    public function index()
    {
        return view('barang/index');
    }

    //--------------------------------------------------------------------

    public function barang()
    {
        helper("admin");
        $crud = new GroceryCrud();
        $crud->setTable('barangs');
        $crud->unsetPrint();
        $crud->unsetExport();
        if(!checkIsAdmin()){
            $crud->unsetAdd();
            $crud->unsetDelete();
            $crud->unsetEdit();
        }
        $crud->uniqueFields(['Kode_Barang']);
        $crud->requiredFields(['Kode_Barang','Nama_Barang','Jenis_Barang','Satuan','Merek','Jumlah','Tanggal_Masuk','Tanggal_Keluar']);
        $output = $crud->render();
        return view('render_table', (array)$output);
    }

    function checkKodeBarang($kodebarang){
        $barang = new BarangModel();
        $barang->select();
        $barang->where('Kode_Barang',$kodebarang);
        $array = $barang->get();
        if(empty($array->getRowArray())){
            return "0";
        }
        else{
            return "1";
        }
    }
}
