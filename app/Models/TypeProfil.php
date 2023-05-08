<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProfil extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'type_profil';
    protected $fillable = [
        'id',
        'nom'
    ];
}
