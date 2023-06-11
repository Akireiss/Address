<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';

    protected $fillable = [
        'city'
    ];

    public function address()
    {
        return $this->hasMany(Address::class, 'barangay_id', 'id');
    }
    public function municipalities()
    {
        return $this->hasMany(Municipality::class, 'city_id', 'id');
    }


}
