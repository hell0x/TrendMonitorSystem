<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/24
 * Time: 17:02
 */

namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository
{
    /**
     * 权限列表
     * @param $nbrPages
     * @param $parameters
     * @return mixed
     */
    public function getAll($nbrPages, $parameters)
    {
        return Permission::orderBy($parameters['order'], $parameters['direction'])
            ->paginate($nbrPages);
    }

    /**
     * 添加权限
     */
    public function store($request)
    {
        $request->merge(['guard_name' => $request->guard_name]);

        Permission::create($request->all());
    }

    public function update($request, $permission)
    {
        $request->merge(['guard_name' => $request->guard_name]);

        $permission->update($request->all());
    }

}