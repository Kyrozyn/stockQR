<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;


class QR extends BaseController
{
    public function scan(){
        return view('QR/scan');
    }
}