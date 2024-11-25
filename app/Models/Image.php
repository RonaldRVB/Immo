<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function home()
    {
        return $this->belongsTo(Home::class);
    }
}
