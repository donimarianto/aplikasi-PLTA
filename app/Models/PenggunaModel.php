<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaModel extends Model
{
    use HasFactory;

    protected $table = "tb_pengguna";

    public $timestamps = false;

    
}
