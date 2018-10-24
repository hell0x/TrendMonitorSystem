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

class RoleRepository
{

    public function getAll($nbrPages, $parameters)
    {
        return Role::with('permissions')
            ->orderBy($parameters['order'], $parameters['direction'])
            ->paginate($nbrPages);
    }
}