<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StateImgs extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','state_id','img'
    ];

    public function state():BelongsTo{
        return $this->belongsTo(State::class);
    }
}
