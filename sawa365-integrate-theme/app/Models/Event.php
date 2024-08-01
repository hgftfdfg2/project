<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'discreption','location','date','img','state_id'];


    protected $casts = [
        'date'=>'datetime'
    ];

    public function state():BelongsTo{
        return $this->belongsTo(State::class);
    }
}
