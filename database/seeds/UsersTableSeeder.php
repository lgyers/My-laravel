<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);

        $users = factory(User::class)->times(50)->make()->each(function ($user, $i) {
            if ($i == 0) {
                $user->name = 'admin';
                $user->email = 'admin@gmail.com';
                $user->password = bcrypt('123123');
            }
        });

        User::insert($users->toArray());

        $simple = Role::create([
            'name'   => 'user'
        ]);

        $admin = Role::create([
            'name'   => 'super-admin'
        ]);

        $users = User::all();
        foreach ($users as $key => $user) {
            if ($key%2 == 0) {
                $user->attachRole($simple);
            }else{
                $user->attachRole($admin);
            }
        }
    }
}
