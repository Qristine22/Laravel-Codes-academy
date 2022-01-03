<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Header extends Model
{
    use HasFactory;
    use SoftDeletes;
        
    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'link',
        'parent_id',
    ];


    public static function findItemWithParentId($id){
        return Header::findOrFail($id)->name_am;
    }
}
