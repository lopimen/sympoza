<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manuscript_Sympozia extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title', 'abstract'];
    protected $table = 'sympozia_manuscript';
}
