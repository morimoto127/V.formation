<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'ingredient' => 'required',
        'time' => 'required',
        'recipe' => 'required',
    );

    public function user() {
        return $this->belongsTo(User::class);
    }
}
