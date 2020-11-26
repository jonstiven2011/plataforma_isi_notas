<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Curso;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$usr 			= new User;
    	$usr->fullname  = 'Johnnathan Steven Navarro';
    	$usr->document  = '1234567890';
    	$usr->email     = 'jonstivennava@gmail.com';
    	$usr->phone     = '3156205482';
    	$usr->curso_1   = '1';
    	$usr->curso_2   = '0';
    	$usr->curso_3   = '0';
    	$usr->password  = bcrypt('Stiven923731');
    	$usr->role      = 'admin';
    	$usr->save();
       factory(App\User::class, 5)->create();
    }
}