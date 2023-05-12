<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table='facturas';
    protected $primaryKey='factura';

    public $timestamps=false;

    protected $fillable=[
        'fecha',
        'cliente',
        'tipopago',
    ];
}
