<?php

namespace App\Controllers;

use App\Models\FormulirModel;

class regi extends BaseController
{
    public function index()

    {
        $data = [
            'title' => 'Registrasi'
        ];


        return view('formulir/form', $data);
    }
    public function proses()
    {


        if ($this->request->getMethod() == 'post') {
            $formulir = new FormulirModel();


            $dataForm = [
                'nama' => $_POST['nama'],
                'nim' => $_POST['nim'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'alamat' => $_POST['alamat'],
                'tempat-lahir' => $_POST['tempat-lahir'],
                'tanggal-lahir' => $_POST['tanggal-lahir'],
                'jenis-kelamin' => $_POST['jenis-kelamin']
            ];
            $formulir->save($dataForm);
        }
        return redirect()->to(base_url('/regi/read'));
    }

    public function read()
    {
        $formulir = new FormulirModel();
        $db      = \Config\Database::connect();
        $builder = $db->table('registrasi');

        $keyword = $this->request->getVar('keyword');
        
        if ($keyword) {
            $builder->Like('nama', $keyword);
            $data = $builder->get()->getResult();

            

            function objectToArray($d)
            {
                if (is_object($d)) {
                    // Gets the properties of the given object
                    // with get_object_vars function
                    $d = get_object_vars($d);
                }

                if (is_array($d)) {
                    /*
        * Return array converted to object
        * Using __FUNCTION__ (Magic constant)
        * for recursive call
        */
                    return array_map(__FUNCTION__, $d);
                } else {
                    // Return array
                    return $d;
                }
            }
            $dataForm = objectToArray($data);
            
        } else {
            $dataForm = $formulir->findAll();
        }




        $data = [
            'title' => 'Data Mahasiswa',
            'dataForm' => $dataForm
        ];


        return view('formulir/read.php', $data);
    }

    public function update($id)
    {
        $formulir = new FormulirModel();
        $dataForm = $formulir->find($id);
        $data = [
            'title' => 'Update',
            'dataForm' => $dataForm
        ];

        return view('formulir/update.php', $data,);
    }

    public function prosesUpdate()
    {
        if ($this->request->getMethod() == 'post') {
            $formulir = new FormulirModel();
            $id = $_POST['id'];
            $dataUpdate = [
                'nama' => $_POST['nama'],
                'nim' => $_POST['nim'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'alamat' => $_POST['alamat'],
                'tempat-lahir' => $_POST['tempat-lahir'],
                'tanggal-lahir' => $_POST['tanggal-lahir'],
                'jenis-kelamin' => $_POST['jenis-kelamin']
            ];

            $formulir->update($id, $dataUpdate);
            return redirect()->to(base_url('/regi/read'));
        }
    }

    public function delete($id)
    {
        $formulir = new FormulirModel();
        $formulir->delete($id);
        return redirect()->to(base_url('/regi/read'));
    }

    public function detail($id)
    {
        $formulir = new FormulirModel();
        $dataForm = $formulir->find($id);
        $data = [
            'title' => 'Detail',
            'dataForm' => $dataForm
        ];

        return view('formulir/detail.php', $data,);
    }


























    // public function read()
    // {
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('formulir');
    //     $formulir = new FormulirModel();


    //     $dataForm = $builder->getWhere(['nama' => 'asd'])->getResult();
    //     // $dataForm = $formulir->findAll();

    //     // $data = [
    //     //     'dataForm' => $dataForm
    //     // ];
    //     dd($dataForm);
    // }
}
