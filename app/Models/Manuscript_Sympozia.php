<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manuscript_Sympozia extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','paper_code', 'title', 'abstract'];
    protected $table = 'sympozia_manuscript';

    public function file(){
        return $this->hasMany(ManuscriptFile_Sympozia::class, 'manuscript_id', 'id');
    }

    public function author(){
        return $this->hasMany(ManuscriptAuthor_Sympozia::class, 'manuscript_id', 'id');
    }
}
