<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminservice extends Model
{
    use HasFactory;
    protected $fillable = ['name','image'];
}
