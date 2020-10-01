<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //entry -> user

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
