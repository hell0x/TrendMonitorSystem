<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/24
 * Time: 17:39
 */

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\RoleRepository;
use App\Models\Role;

class RoleController extends Controller
{
    use Indexable;

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'roles';
    }

    public function create()
    {
        $guard_names = collect($this->guard_names)->pluck('title', 'id');
        return view('back.roles.create', compact('guard_names'));
    }

    public function store(Request $request)
    {

    }

    public function edit(Role $role)
    {

    }

    public function update(Request $request, Role $role)
    {

    }

    public function destroy(Role $role)
    {

    }
}