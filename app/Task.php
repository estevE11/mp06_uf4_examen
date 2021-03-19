<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    public $fillable = ['project_id', 'name', 'description', 'completed'];

    public function project() {
        return $this->belongsTo(Project::class);
    }
}
