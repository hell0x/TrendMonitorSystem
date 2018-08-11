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
        // $this->call(UsersTableSeeder::class);
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');
        // Users
        User::create(
            [
                'name' => 'WeiAdmin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
            ]
        );
        $front_users = factory(User::class, 5)->create();

        $role_write = Role::create(['name' => 'writer']);
        $role_admin = Role::create(['name' => 'admin']);

//        $user_admin->assignRole('writer');
//        $user_admin->assignRole('admin');
//        $front_users->assignRole('write');

        Permission::create(['name' => 'add articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);

        $user_admin = User::find(1);
        $user_admin->assignRole('admin');

        $role_write->syncPermissions(['add articles', 'edit articles']);
        $role_admin->syncPermissions(Permission::all());
    }
}
