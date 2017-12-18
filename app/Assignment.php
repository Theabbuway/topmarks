<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //
    protected $fillable=['name','citation','type','deadline', 'words','level','file','instructions'];
}
