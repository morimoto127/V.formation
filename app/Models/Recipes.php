<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'image' => 'required',
        'ingredient' => 'required',
        'time' => 'required',
        'recipe' => 'required',
    );
}
