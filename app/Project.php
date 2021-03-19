<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    public $fillable = ['name'];

    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
