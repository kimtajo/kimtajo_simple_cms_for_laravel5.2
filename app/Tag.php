<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

	protected $fillable=['board_id', 'tag_name'];

	public function boards(){
		return $this->belongsTo('App\Board');
	}


}
