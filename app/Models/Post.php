<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'created_by'
    ];
}
