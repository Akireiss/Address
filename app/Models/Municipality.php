<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;


    protected $table = 'municipality';

    protected $fillable = [
        'municipality',
        'city_id'
    ];
    public function address()
    {
        return $this->hasMany(Address::class, 'municipality_id', 'id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'municipality_id', 'id');
    }
}
