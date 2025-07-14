<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

   //Get the parent imageable model (user or post).

    public function imageable()
    {
        return $this->morphTo();
    }
}
