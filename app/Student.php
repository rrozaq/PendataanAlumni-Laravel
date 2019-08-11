<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'npm';
    protected $keyType = 'string';
    protected $fillable = [
        'npm', 'nama_0152', 'id_prodi', 'agama', 'jk', 'email', 'hp', 'tempat_lahir', 'tgl_lahir', 'alamat_asal', 'id_provinsi', 'id_kab', 'slta_asal', 'thn'
    ];

    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';
}
