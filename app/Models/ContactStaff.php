<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactStaff extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'possition_en',
        'possition_am',
        'possition_ru',
        'name_en',
        'name_am',
        'name_ru',
        'mail',
        'phone',
    ];
}
