<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function user(){
     return $this->belongsTo('App\User');
    }
    public function playlists(){
        return $this->belongsToMany('App\Playlist');
    }
    public function singer(){
        return $this->belongsToMany(Singer::class);
    }
}
