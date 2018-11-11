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
        $web_permissions = $this->repository->queryPermissionByGrardName('web');
        $back_permissions = $this->repository->queryPermissionByGrardName('back');
        return view('back.roles.create', compact('web_permissions', 'back_permissions'));
    }

    public function store(Request $request)
    {
        $this->repository->store($request);

        return redirect(route('roles.index'))->with('role-ok', __('The role has been successfully created'));
    }

    public function edit(Role $role)
    {
        $web_permissions = $this->repository->queryPermissionByGrardName('web');
        $back_permissions = $this->repository->queryPermissionByGrardName('back');
        return view('back.roles.edit', compact('role', 'web_permissions', 'back_permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $this->repository->update($request, $role);

        return back()->with('role-ok', __('The role has been successfully updated'));
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return response()->json();
    }
}