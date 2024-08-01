<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = ['name','profile_img','bg_img','state_id','description'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'group_user','group_id','user_id');
    }

    public function state():BelongsTo{
        return $this->belongsTo(State::class);
    }

}
