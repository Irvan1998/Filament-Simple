<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'project';

    protected $fillable =
    [
        'name',
        'project_value',
        'client_id',
        'description',
        'status',
    ];

    public function employee()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id',);
    }
}
