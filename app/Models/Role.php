<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 17:23
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

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
    public function Users()
    {
//        return $this->belongsToMany('App\Models\AdmUser');
    }
}