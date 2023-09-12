<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;
    protected $table='procurement';
    public function anggaran()
    {
        return $this->belongsTo(anggaran::class,'jenis_id','id');
    }
}
