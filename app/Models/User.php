<?php

namespace App\Models;

use App\Models\admin;
use App\Models\donasi;
use App\Models\campaign;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded=['id'];


        public function donasi()
    {
        return $this->hasMany(donasi::class);
    }


    protected $fillable = [
        'name',
        'email',
        'password',
        'notelepon',
        'nik',
        'alamat',
        'number',
        'photo',
        'google_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function campaign()
    {
        return $this->hasMany(campaign::class);
    }

    public function admin()
    {
        return $this->hasMany(Admin::class,'user_id');
    }

    // public function pemesanan()
    // {
    //     return $this->hasMany(pemesanan::class);
    // }

    // public function konten()
    // {
    //     return $this->hasMany(konten::class);
    // }

    // public function message()
    // {
    //     return $this->hasMany(message::class);
    // }
}
