<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoverningBoardPage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'inner_en',
        'inner_am',
        'inner_ru',
    ];
}
