<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    
    public function image()
    {
        return $this->hasMany(ProjectImage::class, 'projects_id', 'id');

    }

    public function details()
    {
        return $this->hasMany(ProjectDetails::class, 'projects_id', 'id');

    }

    public function master()
    {
        return $this->hasMany(masterPlan::class, 'projects_id', 'id');

    }
}
