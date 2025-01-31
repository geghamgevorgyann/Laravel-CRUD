<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    /** @use HasFactory<\Database\Factories\PersonsFactory> */
    use HasFactory;
    protected $table = 'persons';
    protected $fillable = ['name','surname','age'];
}
