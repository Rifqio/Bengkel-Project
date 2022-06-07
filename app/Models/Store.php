<?php

namespace App\Models;

use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function item()
    {
        return $this->belongsToMany(Item::class,'item_store','store_id','item_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'id_mitra');
    }

    // public function reservasi(){
    //     return $this->hasMany(Reservasi::class);
    // }
}
