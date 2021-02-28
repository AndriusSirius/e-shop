<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasPermissions;

class Permission extends Model
{
    use HasPermissions;


    protected $fillable = [

        'name',
        'guard_name'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');

//        return $this->hasManyThrough(User::class, UserRole::class, 'role_id', 'id', 'id', 'user_id');
    }
}
