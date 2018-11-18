<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginActivity extends Model
{
    protected  $table = 'login_activities';
    //
    protected $fillable = [
        'id',
        'user_id',
        'login_time'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
