<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'Feedbacks';

    protected $fillable = ['user_id', 'text'];


    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
