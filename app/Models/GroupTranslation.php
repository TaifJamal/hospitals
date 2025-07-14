<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name','notes'];
    public $timestamps = false;
}
