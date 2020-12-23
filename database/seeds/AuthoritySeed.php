<?php

use App\Office;
use Faker\Factory as Fake;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AuthoritySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for ($i = 1; $i <= 95; $i++) {
            $d = Fake::create();
            $f_name = $d->unique()->firstName;
            $m_name = $d->unique()->firstName;
            $l_name = $d->unique()->lastName;
            $mail = $d->unique()->safeEmail;
            $user=Str::slug(rand(10,99).$f_name.rand(1,9).$l_name);

            Office::create([
                'first_name' => $f_name,
                'middle_name' => $m_name,
                'last_name' => $l_name,
                'url' => $user,
                'username' => $user,
                'image'=>'public/all/admin/uploads/user/video1.png',
                'email' => $mail,
                'password' => '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa',
                ]);
        }; */
        Office::create([
            'first_name' => 'Mosaddik',
            'middle_name' => 'Ali',
            'last_name' => 'Ali Maruf',
            'url' => 'mosaddik_a_maruf',
            'username' => 'malinjr07',
            'email' => 'malinjr07@gmail.com',
            'image'=>'public/all/admin/uploads/user/photo_user_01d.jpg',
            'password' => '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa',
        ]);
    }
}
