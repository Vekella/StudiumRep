<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikl extends Model
{
    use HasFactory;

    protected $table='artikli';
    protected $primaryKey='ID';
    public $incrementing=true;


    

}
