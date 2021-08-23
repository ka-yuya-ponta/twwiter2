<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class good extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable=array('num');

 
}
