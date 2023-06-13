<?php

namespace App\Models;

use App\Models\User;
use App\Models\campaign;
use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class donasi extends Model
{
    use HasFactory;
    use HasFormatRupiah;
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
