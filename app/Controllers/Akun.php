<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;
use App\Models\AkunModel;

class Akun extends BaseController
{
    /**
     * @var AkunModel
     */
    private $akun;

    public function __construct() {
        $this->akun = new AkunModel();
    }
    
    public function index()
    {
        return view('akun/index');
    }

    public function akun()
    {
        $crud = new GroceryCrud();
        $crud->setTable('logins');
        $crud->uniqueFields(['Username']);
        $crud->requiredFields(['Username','Password','No_Induk_Karyawan','Jabatan','Jenis_Kelamin']);
        $crud->unsetPrint();
        $crud->unsetExport();
        $output = $crud->render();
        return view('render_table', (array)$output);
    }

    public function checkLogin(){
        $username = htmlspecialchars($this->request->getPost('username'));
        $password = htmlspecialchars($this->request->getPost('password'));
        
        $login = $this->akun->getLogin($username,$password);
        if(!empty($login)){
            session()->set('username',$login['Username']);
            session()->set('jenis_user',$login['Jenis_User']);
            return redirect()->to('/barang');
        }
        else{
            session()->setFlashdata('loginsalah','Username / Password salah!');
            return redirect()->to('/akun/login');
        }
    }

    public function login(){
        if(!session('username')){
            return view('akun/login');
        }
        else{
            return redirect()->to('/barang');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/akun/login');
    }
}