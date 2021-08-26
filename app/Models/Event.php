<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts=[
        'items'=>'array'
    ];

    protected $dates=['date'];

    protected $guarded=[]; // tudo que for mandando pelo POST pode ser atualizado sem restrição

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
