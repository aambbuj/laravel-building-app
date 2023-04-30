<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'projects_id',
        'bhk_type',
        'bhk_bedroom',
        'bhk_bathroom',
        'bhk_sqft',
        'bakgroung_image',
        'status',
    ];

}
