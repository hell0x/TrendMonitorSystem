<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    public function getNameAttribute()
    {
        return (intval($this->parent_id) === 0) ? $this->factor : '-';
    }

    public function getChildNameAttribute()
    {
        return (intval($this->parent_id) === 0) ? '-' : $this->factor;
    }
}
