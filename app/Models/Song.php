<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'singed_by',
        'nameSong',
        'albumSong',
        'yearSong',
        'genreSong',
    ];

    public function artist() {
        return $this->belongsTo(Artist::class, 'singed_by', 'id');
    }
}
