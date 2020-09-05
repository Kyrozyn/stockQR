<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;
use App\Models\BarangModel;
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

    function checkKodeBarang($kodebarang){
        $barang = new BarangModel();
        $barang->select();
        $barang->where('Kode_Barang',$kodebarang);
        $array = $barang->get();
        if(empty($array->getRowArray())){
            return 0;
        }
        else{
            return 1;
        }
    }

    function checkStokBarang($kodebarang){
        $stok = new StokModel();
        $stok->select();
        $stok->where('Kode_Barang',$kodebarang);
        $array = $stok->get();
        $datas = $array->getRowArray();
        if(empty($datas)){
            return 'Stok Tidak Ditemukan';
        }
        else{
            return $datas['Jumlah'];
        }
    }

    function addStok($kodebarang,$jumlah){
        $a = $this->checkStokBarang($kodebarang);
        $stok = new StokModel();
        if($a == 'Stok Tidak Ditemukan'){
            if($this->checkKodeBarang($kodebarang)){
                $data = [
                    'Kode_Barang' => $kodebarang,
                    'Jumlah' => $jumlah
                ];
                $stok->insert($data);
                return "Stok untuk kode barang $kodebarang Ditambahkan!";
            }
            else{
                return "Barang Tidak Ditemukan";
            }
        }
        else{
            $stokku = $stok->where('Kode_Barang', $kodebarang)
                ->first();
            $datadb = $stokku['Jumlah'];
            $data = [
                'Jumlah' => $datadb + $jumlah
            ];
            $stok->update($kodebarang,$data);
            echo "Stok untuk kode barang $kodebarang Ditambahkan!";
        }
    }

    function delStok($kodebarang,$jumlah){
        $a = $this->checkStokBarang($kodebarang);
        $stok = new StokModel();
        if($a == 'Stok Tidak Ditemukan'){
            if($this->checkKodeBarang($kodebarang)){
                return "Stok tidak ditemukan / Barang Habis!";
            }
            else{
                return "Barang Tidak Ditemukan";
            }
        }
        else{
            $stokku = $stok->where('Kode_Barang', $kodebarang)
                ->first();
            $datadb = $stokku['Jumlah'];
            if($datadb > 0){
                $data = [
                    'Jumlah' => $datadb - $jumlah
                ];
                $stok->update($kodebarang,$data);
                return "Stok untuk kode barang $kodebarang Berhasil Dikurangi!";
            }
            else{
                return "Barang habis!";
            }

        }
    }
}