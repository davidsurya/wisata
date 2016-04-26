<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
	protected $table = 'location';

    protected $fillable = [
    	'user_id', 'name', 'description', 'latitude', 'longitude', 'ticket', 'facilities',
    ];

    protected $hidden = [
    	'created_at', 'updated_at',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
