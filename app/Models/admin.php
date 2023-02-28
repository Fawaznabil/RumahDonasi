<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
        use HasFactory;

        protected $fillable = [
            'NAMA_PEMESANAN',
            'JUDUL',
            'ASAL_INSTANSI',
            'DESKRIPSI',
            'JENIS_KONTEN',
            'LINK_POSTER',
            'STATUS',
            'id_user',
            'TGL_UPLOAD',
            'MEDIA',
        ];

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function konten()
        {
            return $this->hasMany(konten::class);
        }
    }
