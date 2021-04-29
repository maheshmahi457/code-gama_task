<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statastics extends Model
{
    use HasFactory;

    protected $table = 'statastics';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'tags_id',
        'questions',
        'answers',
        'que_accepted',
        'que_voted',
        'ans_voted',
        'que_viewed',
        'comments',
        'date_added',
    ];
}
