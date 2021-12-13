<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManuscriptAuthor_Sympozia extends Model
{
    protected $table = 'sympozia_manuscript_author';
    protected $fillable = ['manuscript_id', 'author_id', 'presenter', 'contact'];
    use HasFactory;
}
