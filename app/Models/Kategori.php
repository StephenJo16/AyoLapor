<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey= "id_kategori";
    protected $fillable =['ket_kategori'];
     public function Input(){
       return $this->belongsTo(Input::class, 'id_kategori','id_kategori');
   }
}
