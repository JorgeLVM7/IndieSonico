<?php

namespace IndieSonico;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Auth\Passwords\CanResetPassword;
use  IndieSonico\Notifications\MyResetPassword;


class User extends Authenticatable
{
    use Notifiable;
    use CanResetPassword;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','password','last_name','user','level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }


}
