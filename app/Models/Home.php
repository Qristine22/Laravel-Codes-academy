<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'logo',
        'bg_img',
        'title_en',
        'title_am',
        'title_ru',
        'rectors_word_en',
        'rectors_word_am',
        'rectors_word_ru',
        'rectors_signature',
    ];
}
