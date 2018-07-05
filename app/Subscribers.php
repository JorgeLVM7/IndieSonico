<?php

namespace IndieSonico;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    use Notifiable;

    protected $fillable = [
        'name_complete', 'email'


    ];
}
