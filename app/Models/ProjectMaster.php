<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMaster extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'icon',
        'firebase_url'
    ];
}
