<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus';
    
    protected $fillable = [
        'nama',
        'foto', 
        'struktur_organisasi',
        'jabatan',
        'quotes',
        'instagram',
        'facebook',
        'twitter',
        'linkedin'
    ];
}
