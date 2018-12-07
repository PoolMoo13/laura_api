<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * Relations
     */
    public function questions() {
        return $this->hasMany('App\Question');
    }
}
