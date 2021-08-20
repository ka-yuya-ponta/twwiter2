<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Person extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable=array('content','comment');

    public static $rules = array(
        'content' => 'required|max:120',
        'comment' => 'required | max:120'
    );
}
