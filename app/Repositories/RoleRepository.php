<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/24
 * Time: 17:01
 */

namespace App\Repositories;

use App\Models\Role;
use App\Models\Permission;
//use Spatie\Permission\Models\Role as spatieRole;

class RoleRepository
{

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function getAll($nbrPages, $parameters)
    {
        return Role::with('permissions')
            ->orderBy($parameters['order'], $parameters['direction'])
            ->paginate($nbrPages);
    }

    /**
     * 获取指定组里面的权限
     * @param $guardName
     * @return mixed
     */
    public function queryPermissionByGrardName($guardName)
    {
        return Permission::where('guard_name', $guardName)->get();
    }

    /**
     * @param $request
     */
    public function store($request)
    {
        $guard_name = !empty($request->web_permission) ? 'web' : 'back';
        $request->merge(['guard_name' => $guard_name]);

        $role = Role::create($request->all());

        $this->savePermissions($role, $request);
    }

    public function update($request, $role)
    {
        $guard_name = !empty($request->web_permission) ? 'web' : 'back';
        $request->merge(['guard_name' => $guard_name]);

        $role->update($request->all());

        $this->savePermissions($role, $request);
    }

    /**
     * @param \App\Models\Role $role
     * @param $request
     */
    protected function savePermissions($role, $request)
    {
        $permissions = !empty($request->web_permission) ? $request->web_permission : $request->back_permission;
        $role->permissions()->sync($permissions);
    }
}