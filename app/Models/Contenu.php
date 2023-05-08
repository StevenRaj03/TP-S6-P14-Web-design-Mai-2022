<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'contenu';
    protected $fillable = [
        'id',
        'titre',
        'visuel',
        'body',
        'date',
        'lieu',
        'idprofil',
        'idcategorie'
    ];
}
