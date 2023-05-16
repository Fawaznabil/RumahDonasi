<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    use HasFactory;

    protected $guarded =['id'];
    // protected $fillable = [
    //     'harga',
    //     'nama',
    //     'email',
    //     'total_harga',
    //     'status'
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function campaign()
    {
        return $this->belongsTo(campaign::class);
    }
}
