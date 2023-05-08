<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'profil';
    protected $fillable = [
        'id',
        'idtype_profil',
        'nom',
        'email',
        'password'
    ];
}
