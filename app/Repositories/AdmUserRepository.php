<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 17:17
 */

namespace App\Repositories;

use App\Models\AdmUser;

class AdmUserRepository
{
    public function getAll($nbrPages, $parameters)
    {
        return AdmUser::with('roles')
            ->orderBy($parameters['order'], $parameters['direction'])
            ->paginate($nbrPages);
    }

}