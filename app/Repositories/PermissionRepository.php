<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/24
 * Time: 17:02
 */

namespace App\Repositories;

use App\Models\Permission;
use Illuminate\Http\Request;

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
     * @param Request $request
     */
    public function store(Request $request)
    {
        $request->merge(['guard_name' => $request->guard_name[0]]);

        Permission::create($request->all());
    }
}