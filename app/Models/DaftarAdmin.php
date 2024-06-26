<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class DaftarAdmin extends Authenticatable
{
    use Notifiable;

    protected $table = "tb_admin";

    public $timestamps = false;

    protected $fillable = [
        'nama', 'email', 'password', 'alamat',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}