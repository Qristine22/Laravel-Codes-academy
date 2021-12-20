<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoverningBoardPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'inner_en',
        'inner_am',
        'inner_ru',
    ];
}
