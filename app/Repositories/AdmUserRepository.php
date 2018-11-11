<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 17:17
 */

namespace App\Repositories;

use App\Models\AdmUser;
use App\Models\Role;

class AdmUserRepository
{
    public function getAll($nbrPages, $parameters)
    {
        return AdmUser::with('adm_users')
            ->orderBy($parameters['order'], $parameters['direction'])
            ->paginate($nbrPages);
    }

    /**
     * 获取指定组里面的权限
     * @param $guardName
     * @return mixed
     */
    public function queryRoleByGrardName($guardName)
    {
        return Role::where('guard_name', $guardName)->get();
    }

    /**
     * @param $request
     */
    public function store($request)
    {
        $guard_name = !empty($request->web_role) ? 'web' : 'back';
        $request->merge(['guard_name' => $guard_name]);

        $admUser = AdmUser::create($request->all());

        $this->savePermissions($admUser, $request);
    }

    public function update($request, $admUser)
    {
        $guard_name = !empty($request->web_role) ? 'web' : 'back';
        $request->merge(['guard_name' => $guard_name]);

        $admUser->update($request->all());

        $this->savePermissions($admUser, $request);
    }

    /**
     * @param \App\Models\Role $admUser
     * @param $request
     */
    protected function savePermissions($admUser, $request)
    {
        $roles = !empty($request->web_role) ? $request->web_role : $request->back_role;
        $admUser->roles()->sync($roles);
    }

}