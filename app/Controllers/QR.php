<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;


class QR extends BaseController
{
    public function scan(){
        return view('QR/scan');
    }

    public function barangmasuk(){
        return view('QR/barangmasuk/scan');
    }

    public function barangkeluar(){
        return view('QR/barangkeluar/scan');
    }
}