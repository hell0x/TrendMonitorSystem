<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class AdmUser extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard_name = 'back';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 用户角色关系
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'model_has_roles', 'model_id');
    }
}
