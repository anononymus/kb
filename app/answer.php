<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $fillable = [
        'ans_id',
        'para_id',
        'ques_id'];
}
