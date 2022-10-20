<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['timezone','city_id','cod','name'];

    protected $table = 'cities';

    public function main()
    {
        return $this->hasOne(Main::class,'city_id', 'id');
    }

    public function weather()
    {
        return $this->hasOne(Weather::class,'city_id');
    }

    public function wind()
    {
        return $this->hasOne(Wind::class,'city_id');
    }

    public function coord()
    {
        return $this->hasOne(Coord::class,'city_id');
    }
}
