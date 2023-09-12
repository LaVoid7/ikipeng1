<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggaran extends Model
{
    protected $table='anggaran';
    use HasFactory;
    public function Procurement()
    {
        return $this->hasMany(Procurement::class);
    }
}
