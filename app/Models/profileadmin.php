<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileadmin extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'NamaLengkap',
        'Email',
        'NoTelp'
    ];
    protected $table = 'profileadmin';
    public $timestamps = false;
}
