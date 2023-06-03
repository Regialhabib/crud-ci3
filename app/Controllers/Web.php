<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function index()
    {
        $data = ['title' => 'HOME '];
        
        echo view('web\home.php',$data);
        
    }
    public function profile()
    {
        $data = ['title' => 'PROFILE | KELAS F'];
        
        echo view('web\profile.php',$data);
        
    }
    public function kontak()
    {
        $data = ['title' => 'KONTAK | KELAS F'];
        
        echo view('web\kontak.php',$data);
        
    }
}

