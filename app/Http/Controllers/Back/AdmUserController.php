<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 14:54
 */

namespace App\Http\Controllers\Back;

use App\Repositories\AdmUserRepository;
use Illuminate\Http\Request;

class AdmUserController
{
    use Indexable;

    public function __construct(AdmUserRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'adm_users';
    }
}