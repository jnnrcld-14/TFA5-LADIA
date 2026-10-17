<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'status', 'task_date'];
    public $timestamps = false;
    protected $casts = ['task_date' => 'date'];
}
