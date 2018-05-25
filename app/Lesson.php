<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    public function scopeFilter($builder, QueryFilter $filter)
    {

        return $filter->apply($builder);

    }

}
