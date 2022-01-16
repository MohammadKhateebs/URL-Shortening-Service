<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urlshort extends Model
{
    use HasFactory;
    protected $fillable = [
       'url_user',
       'url_short',
    ];
}
