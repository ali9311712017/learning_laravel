<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function threads(){
        return $this->belongsTo(Thread::class);
    }}
