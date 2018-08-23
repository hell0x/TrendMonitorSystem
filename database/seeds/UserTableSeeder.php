<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AdmUser;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 前台管理员
        $user_admin = User::create(
            [
                'name' => 'WeiFront',
                'email' => 'weifront@gmail.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
            ]
        );
        // 随机生成普通用户
        factory(User::class, 5)->create();
        // 给前台管理员赋予角色关系
        $user_admin->assignRole('front');

        // 后台管理员
        $admuser_admin = AdmUser::create(
            [
                'name' => 'WeiAdmin',
                'email' => 'weiadmin@gmail.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
            ]
        );
        // 给前台管理员赋予角色关系
        $admuser_admin->assignRole('back');
    }
}
