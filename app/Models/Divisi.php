<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = ['kode','nama'];

    public function pegawais(){
        return $this->hasMany(Pegawai::class);
    }
    
}
