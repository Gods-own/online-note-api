<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'folder_name',
        'total_notes'
    ];

    public function notes() {
        return $this->hasMany(Note::class);
    } 
}
