<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdnProduct extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /* 
    relation to user model
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* 
    relation to LotWip model
    */
    public function lotwip()
    {
        return $this->hasOne(LotWip::class);
    }

    /* 
    relation to Check model
    */
    public function check()
    {
        return $this->hasOne(Check::class);
    }

    /* 
    relation to berat model
    */
    public function berat()
    {
        return $this->hasOne(Berat::class);
    }

    /* 
    relation to quantity model
    */
    public function quantity()
    {
        return $this->hasOne(Quantity::class);
    }
}
