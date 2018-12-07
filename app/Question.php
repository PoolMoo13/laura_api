<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Relations
     */
    public function subject() {
        return $this->belongsTo('App\Subject');
    }
}
