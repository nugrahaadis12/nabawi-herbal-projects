<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function extrakurikulers()
    {
        return $this->belongsToMany(Extrakurikuler::class, 'siswa_extrakurikuler', 'siswa_id', 'extrakurikuler_id');
    }
}
