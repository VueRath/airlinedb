<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**$table->id();
        $table->foreignId('user_id')->constrained();
        $table->foreignId('flight_id')->constrained();
        $table->timestamps(); */

        protected $fillable = 
        [
            'user_id',
            'flight_id'
        ];

        public function user()
        {
            return $this->belongsTo(User::class,'user_id');
        }

        public function bookFlights()
        {
            return $this->belongsTo(Flight::class,'flight_id');
        }
}
