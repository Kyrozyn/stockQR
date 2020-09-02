<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;
use App\Models\StokModel;

class Stok extends BaseController
{
    public function stok()
    {
        helper('admin');
        $crud = new GroceryCrud();
        $crud->setTable('stoks');
        $crud->uniqueFields(['Kode_Barang']);
        $crud->setPrimaryKey('Kode_Barang');
        $crud->setRelation('Kode_Barang', 'barangs', 'Kode_Barang');
        $crud->unsetPrint();
        $crud->unsetExport();
        if(!checkIsAdmin()){
            $crud->unsetAdd();
            $crud->unsetDelete();
            $crud->unsetEdit();
        }
        $output = $crud->render();
        return view('render_table', (array)$output);
    }

    public function index()
    {
        return view('stok/index');
    }

    public function stonk(){
        $a = new StokModel();
        $a->getStokWithName();
    }
}