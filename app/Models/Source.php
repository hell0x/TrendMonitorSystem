<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'source', 'source_url', 'type', 'status'
    ];

}
