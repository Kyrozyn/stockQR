<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;
use App\Models\AkunModel;
use App\Models\LaporanModel;

class Laporan extends BaseController
{
    public function index()
    {
        return view('laporan/laporan');
    }

    public function cetak()
    {
        $tanggalawal = $this->request->getGet('tanggalawal');
        $tanggalakhir = $this->request->getGet('tanggalakhir');
        $data = [
            'tanggalawal' => $tanggalawal,
            'tanggalakhir' => $tanggalakhir
        ];
        return view('laporan/index', $data);
    }

    public function laporan()
    {
        $crud = new GroceryCrud();
        $tanggalawal = $this->request->getGet('tanggalawal');
        $tanggalakhir = $this->request->getGet('tanggalakhir');
        $string = 'tanggal>="'.$tanggalawal.'" AND '.'tanggal<="'.$tanggalakhir.'"';
        $crud->where($string);
        $crud->setTable('laporans');
        $crud->unsetAdd();
        $crud->unsetDelete();
        $crud->unsetEdit();
        $output = $crud->render();
        return view('render_table', (array)$output);
    }

    public function tambahLaporan($kodebarang,$jumlah,$keterangan){
        $laporanmodel = new LaporanModel();
        $db = \Config\Database::connect();
        $q = $db->query('SELECT * FROM laporans where Kode_Barang = "'.$kodebarang.'" AND Tanggal = CURDATE() AND Keterangan = "'.$keterangan.'"');
        $res = $q->getResultArray();
        if(empty($res)){
            $data = [
                'Kode_Barang' => $kodebarang,
                'Jumlah' => $jumlah,
                'Keterangan' => $keterangan,
                'Tanggal' => date('Y-m-d')
            ];
            $laporanmodel->insert($data);
        }
        else{
            $jumlahhhhhh = $res[0]['Jumlah'];
            $data = [
                'Jumlah' => $jumlahhhhhh+$jumlah
            ];
            $laporanmodel->update($res[0]['ID'], $data);
        }
    }
}