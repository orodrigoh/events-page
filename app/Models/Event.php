<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'organizer',
        'address_id',
        'image_id',
        'user_id',
    ];

    protected $dates = ['date'];


    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    public function getEventDateAttribute()
    {
        return Carbon::parse($this->date);
    }
}
