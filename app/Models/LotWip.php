<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotWip extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /* 
    relation to idnProduct model
    */
    public function idnproduct()
    {
        return $this->belongsTo(IdnProduct::class);
    }
}
