<?php

namespace IndieSonico;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Popup extends Model
{
    protected $fillable = [
        'title', 'description', 'path', 'video', 'comment','category', 'bonus'


    ];


    public function setPathAttribute($path)
    {
        if (!empty($path)) {
            $this->attributes['path'] = Carbon::now()->second . $path->getClientOriginalName();
            $name = Carbon::now()->second . $path->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($path));
        }

    }
}