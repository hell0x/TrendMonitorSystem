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
    public function getAll($nbrPages, $parameters)
    {
        return Permission::orderBy($parameters['order'], $parameters['direction'])
            ->paginate($nbrPages);
    }
}