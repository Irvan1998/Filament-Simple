<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'employee';

    protected $fillable =
    [
        'email',
        'username',
        'password',
        'img',
        'role_id',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id',);
    }
}
