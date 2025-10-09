<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // Properti ini secara eksplisit memberitahu Laravel bahwa model ini
    // terhubung dengan tabel bernama 'user' (bukan 'user_models'). karena nama file ini UserModel klo user.php baru gk ush ditulis
    protected $table = 'user';

    // Properti ini melindungi kolom 'id' agar tidak bisa diisi secara massal.
    protected $guarded = ['id'];

    public function kelas(){
     //Mendefinisikan relasi many-to-one ke model Kelas.
     //Artinya, satu user (siswa) hanya milik satu kelas.
     //Metode ini terhubung ke tabel 'kelas' melalui kolom foreign key 'kelas_id'
     //yang ada di tabel 'user'.
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }



    //Mengambil semua data dari tabel 'user' dan melakukan JOIN
    //dengan tabel 'kelas' untuk mendapatkan nama kelas yang sesuai.
    //Hasilnya adalah koleksi data user yang sudah menyertakan nama kelasnya.
    public function getUser(){
        // Melakukan join ke tabel 'kelas'
        return $this -> join('kelas', 'kelas.id', '=', 'user.kelas_id') 
        // Memilih semua kolom dari tabel 'user' dan menambahkan kolom 'nama_kelas'
        -> select('user.*', 'kelas.nama_kelas as nama_kelas')
        -> get(); 
    }
}
