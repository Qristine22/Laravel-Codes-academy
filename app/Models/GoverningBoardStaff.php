<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoverningBoardStaff extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'possition_en',
        'possition_am',
        'possition_ru',
        'biography_en',
        'biography_am',
        'biography_ru',
        'img',
    ];
}
