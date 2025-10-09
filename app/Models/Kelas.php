<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Properti ini melindungi kolom 'id' agar tidak bisa diisi secara massal.
    // Ini adalah praktik keamanan standar di Laravel.
    protected $guarded = ['id'];

    
    public function user(){
        //mendefinisikan relasi one-to-many ke model UserModel
        //Artinya, satu kelas bisa memiliki banyak user (siswa).
        //Metode ini terhubung ke tabel 'user' melalui kolom foreign key 'kelas_id'.
        return $this->hasMany(UserModel::class, 'kelas_id');
    }

    public function getKelas(){
        //Mengambil semua data dari tabel 'kelas'.
        //Metode ini adalah helper untuk mendapatkan daftar semua kelas.
        return $this->all();
    }
}
