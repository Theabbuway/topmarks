<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class assignments extends Model {
    use ObservantTrait;

    protected $table = 'assignments';

}