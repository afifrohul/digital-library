<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\User();
        $admin->name = 'admin';
        $admin->email = 'admin@digital-library.com';
        $admin->email_verified_at = now();
        $admin->password = \Hash::make('admin123');
        $admin->remember_token = \Str::random(60);
        $admin->created_at = now();
        $admin->updated_at = now();
        $admin->save();
        event(new Registered($admin));
        $admin->assignRole('admin');
        
        $user = new \App\Models\User();
        $user->name = 'Afif';
        $user->email = 'afifmemyself22@gmail.com';
        $user->email_verified_at = now();
        $user->password = \Hash::make('afifafif');
        $user->remember_token = \Str::random(60);
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
        event(new Registered($user));
        $user->assignRole('user');
        
        $user = new \App\Models\User();
        $user->name = 'Rohul';
        $user->email = 'rohulmemyself22@gmail.com';
        $user->email_verified_at = now();
        $user->password = \Hash::make('rohulrohul');
        $user->remember_token = \Str::random(60);
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
        event(new Registered($user));
        $user->assignRole('user');

    }
}
