<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extrakurikuler extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function siswas()
    {
        return $this->belongsToMany(Siswa::class, 'siswa_extrakurikuler', 'extrakurikuler_id','siswa_id');
    }
}
