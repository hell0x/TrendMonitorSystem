<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 17:17
 */

namespace App\Repositories;

use App\Models\AdmUser;
use App\Models\Permission;
use App\Models\Role;

class AdmUserRepository
{

    //角色实例
    protected $role;

    //后台用户实例
    protected $admUser;

    //权限实例
    protected $permission;

    /**
     * AdmUserRepository constructor.
     * @param Role $role
     * @param AdmUser $admUser
     * @param Permission $permission
     */
    public function __construct(Role $role, AdmUser $admUser, Permission $permission)
    {
        $this->role = $role;
        $this->admUser = $admUser;
        $this->permission = $permission;
    }



}