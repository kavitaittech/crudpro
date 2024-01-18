<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usercrud extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email','pass','address','city','zip'
       
    ];
}
