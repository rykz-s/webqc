<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanken extends Model
{
    use HasFactory;

    // protected $guarded = [
    //     'id',
    //     'timestamps'
    // ];

    protected $guarded = [];
    protected $table = 'kankens';
}
