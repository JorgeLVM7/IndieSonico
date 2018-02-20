<?php

namespace Insonico;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Topten extends Model
{
    protected $fillable = [
        'head', 'path'

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

