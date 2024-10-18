<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbWinx extends Model
{
    use HasFactory;

    protected $primaryKey = 'idWinx';
    protected $fillable = [
        'nomeWinx',
        'elementoWinx',
        'namoradoWinx',
        'planetaWinx',
    ];
}
