<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    // use HasFactory;
    protected $table="aspirasi";
    protected $primaryKey = 'id_aspirasi';
    protected $fillable=['id_aspirasi', 'status', 'nik', 'feedback'];
    public function Input(){
        return $this->belongsTo(Input::class, 'nik', 'nik');
    }
}