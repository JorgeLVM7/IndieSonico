<?php

namespace IndieSonico;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'name', 'path','category'

    ];

    public function setPathAttribute($path)
    {
        if(!empty($path)){
            $this->attributes['path']= Carbon::now()->second.$path->getClientOriginalName();
            $name = Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($path));
        }

    }
}
