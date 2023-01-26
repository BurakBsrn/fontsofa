<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->firstOrCreate([
            'email' => 'demo@admin.com',
        ],[
            'name' => 'Berat',
            'surname' => 'Kara',
            'password' => bcrypt('123456'),
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
