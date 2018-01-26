<?php

namespace Insonico;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'head', 'description', 'body','category','date','autor','approve', 'path','video',

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
