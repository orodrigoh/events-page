<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
    ];

    public function getUrlAttribute()
    {
        if (preg_match('/^(http:\/\/|https:\/\/)/', $this->path)) {
            return $this->path;
        }

        return asset('storage/' . $this->path);
    }
}
