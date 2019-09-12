<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function song(){
        return $this->belongsTo(Song::class);
    }
    public function playlist(){
        return $this->belongsTo(Playlist::class);
    }
}
