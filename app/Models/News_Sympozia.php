<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_Sympozia extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];
    protected $table = 'sympozia_news';
    protected $guarded = [];
    
}
