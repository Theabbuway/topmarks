<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class messages extends Model {
	use ObservantTrait;
	
    protected $table = 'messages';

}
