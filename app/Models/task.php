<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'task';
    protected $fillable = [
        'title',
        'description',
        'completed',
    ];
}
