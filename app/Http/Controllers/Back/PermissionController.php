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
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    use Indexable;

    /**
     * PermissionController constructor.
     * @param PermissionRepository $repository
     */
    public function __construct(PermissionRepository $repository)
    {
        $this->repository = $repository;
        $this->guard_names = config('app.guard_names');
        $this->table = 'permissions';
    }

    public function create()
    {
        $guard_names = collect($this->guard_names)->pluck('title', 'id');
        return view('back.permissions.create', compact('guard_names'));
    }

    public function store(Request $request)
    {
        $this->repository->store($request);

        return redirect(route('permissions.index'))->with('post-ok', __('The permission has been successfully created'));
    }

    public function edit(Permission $permission)
    {
        $guard_names = collect($this->guard_names)->pluck('title', 'id');
        $permission->guard_names = collect(['id' => $permission->guard_name]);
        print_r();
        if($permission->guard_names->contains('id', 'back')){
            echo '111';
        }else{
            echo '222';
        }
        dd();
        return view('back.permissions.edit', compact('permission', 'guard_names'));
    }

    public function update(Request $request, Permission $permission)
    {
        $this->repository->update($request, $permission);

        return back()->with('post-ok', __('The post has been successfully updated'));
    }
}