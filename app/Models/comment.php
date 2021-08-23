<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable=array('comment');

    public static $rules = array(
        'comment' => 'required|max:120',
        
    );
}
