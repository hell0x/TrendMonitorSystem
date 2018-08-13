<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthorityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        /**
         * 权限导入数据库
         */
        $front_permissions = array_keys(config('app.permissions.front'));
        $back_permissions = array_keys(config('app.permissions.back'));
        foreach($front_permissions as $permission){
            Permission::create(['name' => $permission]);
        }
        foreach($back_permissions as $permission){
            Permission::create(['name' => $permission]);
        }

        /**
         * 角色导入数据库
         */
        $role_admin = Role::create(['name' => 'admin']);  //管理员类角色
        $role_front = Role::create(['name' => 'front']);  //前台管理员类角色
        $role_back  = Role::create(['name' => 'back']);   //后台管理员类角色

        /**
         * 角色权限关联
         */
        $role_admin->syncPermissions(Permission::all());
        $role_front->syncPermissions($front_permissions);
        $role_back->syncPermissions($back_permissions);
    }
}
