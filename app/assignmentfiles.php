<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignmentfiles extends Model
{
    protected $fillable = ['assignment_id', 'filename'];

    public function assignment()
    {
        return $this->belongsTo('App\Assignment');
    }
}
