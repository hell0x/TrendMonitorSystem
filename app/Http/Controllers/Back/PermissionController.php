<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/24
 * Time: 17:39
 */

namespace App\Http\Controllers\Back;


use App\Http\Controllers\Controller;
use App\Repositories\PermissionRepository;

class PermissionController extends Controller
{
    use Indexable;

    public function __construct(PermissionRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'permissions';
    }

    public function create()
    {
        return view('back.permissions.create');
    }

    public function store()
    {
        
    }
}