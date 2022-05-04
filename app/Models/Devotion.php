<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devotion extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    
    protected $fillable = [ 
        'user_id', 
        'title', 
        'book',
        'chapter',
        'verses',
        'bible_verse',
        'rhema',
        'reflection',
        'motivation',
        'application',
        'tags'
    ];

 
}
