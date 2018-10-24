<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/24
 * Time: 17:39
 */

namespace App\Http\Controllers\Back;


use App\Http\Controllers\Controller;
use App\Repositories\RoleRepository;

class RoleController extends Controller
{
    use Indexable;

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'roles';
    }
}