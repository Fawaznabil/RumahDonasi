<?php

namespace App\Models;

use App\Models\User;
use App\Models\donasi;
use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class campaign extends Model
{
    use HasFormatRupiah;
    use HasFactory;

    protected $guarded =['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function donasi()
    {
        return $this->hasMany(donasi::class);
    }
}
