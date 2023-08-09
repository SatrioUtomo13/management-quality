<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /* 
    relation to IdnProduct model
    */
    public function idnproduct()
    {
        return $this->belongsTo(IdnProduct::class);
    }
}
