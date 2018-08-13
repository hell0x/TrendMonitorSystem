<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //角色权限数据初始化配置
        $this->call(AuthorityTableSeeder::class);

        //用户数据及角色权限关系初始化配置
        $this->call(UserTableSeeder::class);

    }
}
