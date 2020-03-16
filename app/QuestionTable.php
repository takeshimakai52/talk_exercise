<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionTable extends Model
{
    protected $fillable = [
        'image_path',
        'title',
        'question',
        'answer_good',
        'answer_normal',
        'answer_bad',
        're_answer_good',
        're_answer_normal',
        're_answer_bad',
        'advice_good',
        'advice_normal',
        'advice_bad',
    ];

}
