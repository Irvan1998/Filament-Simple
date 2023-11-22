<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'client';

    protected $fillable =
    [
        'name',
        'image',
        'country',
        'street',
        'city',
        'zip',
        'contact',
        'email',
    ];
}
