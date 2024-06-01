<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
   protected $table = "input_aspirasi";
   protected $fillable =['nik','id_kategori','lokasi','ket'];
   protected $primaryKey = "id_pelaporan";
   public function Penduduk(){
       return $this->hasOne(Penduduk::class, 'nik','nik');
   }
   public function Kategori(){
       return $this->hasOne(Kategori::class, 'id_kategori','id_kategori');
   }
}  
