<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理员
        $user_admin = User::create(
            [
                'name' => 'WeiAdmin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
            ]
        );

        // 随机生成普通用户
        factory(User::class, 5)->create();

        // 给管理员赋予角色关系
        $user_admin->assignRole('admin');
    }
}
