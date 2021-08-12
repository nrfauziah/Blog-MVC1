<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;

class Blog extends Model
{
    protected $fillable = [
        'image', 'title', 'content'
    ]; 
}
