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
use App\Models\AdmUser;

class AdmUserController
{
    use Indexable;

    public function __construct(AdmUserRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'adm_users';
    }

    public function create()
    {
        $web_roles = $this->repository->queryRoleByGrardName('web');
        $back_roles = $this->repository->queryRoleByGrardName('back');
        return view('back.adm_users.create', compact('web_roles', 'back_roles'));
    }

    public function store(Request $request)
    {
        $this->repository->store($request);

        return redirect(route('adm_users.index'))->with('adm_user-ok', __('The adm_user has been successfully created'));
    }

    public function edit(AdmUser $admUser)
    {
        $web_roles = $this->repository->queryRoleByGrardName('web');
        $back_roles = $this->repository->queryRoleByGrardName('back');
        return view('back.adm_users.edit', compact('admUser', 'web_roles', 'back_roles'));
    }

    public function update(Request $request, AdmUser $admUser)
    {
        $this->repository->update($request, $admUser);

        return back()->with('adm_user-ok', __('The adm_user has been successfully updated'));
    }

    public function destroy(AdmUser $admUser)
    {
        $admUser->delete();

        return response()->json();
    }
}