<?php

namespace App\Models;

use CodeIgniter\Model;

class FormulirModel extends Model
{
    protected $table      = 'registrasi';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['nama', 'nim', 'email','password','alamat','tempat-lahir','tanggal-lahir','jenis-kelamin'];
   

    
}
