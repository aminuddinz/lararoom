<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
      'room_no', 'status_id', 'price_per_day', 'created_at', 'updated_at'
    ];

    public function status()
    {
    	return $this->belongsTo('App\Status','status_id');
    }
}
