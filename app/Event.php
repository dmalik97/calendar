<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','event_title','event_start_date','event_start_time','event_end_date','event_end_time'
    ];
    protected $guarded = ['set_end_date_data'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}
