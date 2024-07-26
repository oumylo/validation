<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    //1er methode
    // protected $quarted =[
    //     'id'
    // ];


//2eme methode
    protected $fillable=
     [
         'titre','description','nombrepage'
     ];

}
