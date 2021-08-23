<?php

namespace App\Models;
use App\Models\good;
use App\Models\comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Person extends Model
{
    
    protected $guarded = array('id');
    protected $fillable=array('share');

    public static $rules = array(
        'share' => 'required|min:1,max:120',
    );
    public function book(){
        return $this->hasOne('App\Models\good');
        return $this->hasOne('App\Models\comment');
    }
}
