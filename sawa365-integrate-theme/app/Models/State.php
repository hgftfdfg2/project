<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name','country_id'
    ];

    public function country():BelongsTo{
        return $this->belongsTo(Country::class);
    }

    public function users():HasMany{
        return $this->hasMany(User::class);
    }
    public function imgs():HasMany{
        return $this->hasMany(StateImgs::class);
    }
    public function events():HasMany{
        return $this->hasMany(Event::class);
    }
    public function groups():HasMany{
        return $this->hasMany(Group::class);
    }
}
