<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
   protected $fillable = [
    'clubname',
    'activity',
    'image_name',
    'image_path',
];
    
}
