<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'link',
        'parent_id',
    ];
}
