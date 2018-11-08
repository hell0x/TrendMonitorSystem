<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 17:23
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Role extends Model
{
    use HasRoles;

    protected $guard_name = 'web';

    protected $fillable = [
        'name', 'guard_name'
    ];

    /**
     * 角色权限关系
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission', 'role_has_permissions');
    }

    /**
     * 角色用户关系
     */
    public function users()
    {
//        return $this->belongsToMany('App\Models\AdmUser');
    }

}