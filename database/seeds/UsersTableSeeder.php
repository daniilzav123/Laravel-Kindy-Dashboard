<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $defaultUser = factory(User::class)->create([
        	'name' => 'Kaushik',
        	'email' => 'techwell602@gmail.com',
        	'password' => bcrypt('Kaushik@123'),
        ]);
    }
}
