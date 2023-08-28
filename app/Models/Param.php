<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Param extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /* === search feature === */
    public function scopeItems($query)
    {
        // if (request("itemSearch")) {
        //     return $query->where('item', 'like', '%' . request("itemSearch") . '%')->get();
        // }
        return $query->where('item', 'like', '%' . request("itemSearch") . '%')->get();
    }
}
