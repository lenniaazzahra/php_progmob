<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    //
    protected $table ='advertisements';
    protected $fillable =[
        'specialization', 'title', 'course_type', 'desc', 'location', 'price', 
    ];
}