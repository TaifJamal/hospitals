<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaboratorieEmployee extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];
}
