<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'CodeAstro',
                'email'=>'admin@mail.com',
                'password'=>Hash::make('codeastro.com'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'Customer A',
                'email'=>'customer@mail.com',
                'password'=>Hash::make('codeastro.com'),
                'role'=>'user',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
