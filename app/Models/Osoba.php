<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Osoba extends Model
{
    use HasFactory;

    protected $table='Osobe';
    protected $primaryKey='Osoba_id';
    public $incrementing=true;
    //protected $keyType='string';
    protected $dateformat='U';

    //protected $connection='';

    protected $attributes=[
        'Ime',
        'Prezime',
        'OIB',
        'Datum_rodjenja',
        'e-mail',
        'Mobitel'

    ];
}
