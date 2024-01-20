<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Webuser;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new Webuser;
        $user->name = "Arijit Rai";
        $user->email = "aryan@gmail.com";
        $user->mobile = "9123256548";
        $user->address = "Bilaspur";
        $user->save();
    }
}
