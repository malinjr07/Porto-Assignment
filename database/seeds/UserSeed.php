<?php
use App\User;
use Faker\Factory as Fake;
use Illuminate\Database\Seeder;

/*
use Illuminate\Database\Eloquent\Factory;
use Fake\Generator as Faker;
use Illuminate\Support\Arr;
 */

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 5; $i++) {
            $dummy = Fake::create();
            $f_name = $dummy->unique()->firstName;
            $l_name = $dummy->unique()->lastName;
            $mail = $dummy->unique()->safeEmail;
            $pass = '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa';
            /* $pics = 'public/all/admin/uploads/user/photo_user_01d.jpg'; */

            User::create([
                'name' => $f_name,
                'last_name' => $l_name,
                'image'=>'public/all/admin/uploads/user/video1.png',
                'email' => $mail,
                'password' => $pass,
                ]);
        };
        /* User::create([
            'name' => 'Mosaddik',
            'last_name' => 'Ali Maruf',
            'email' => 'malinjr07@gmail.com',
            'image'=>$pics,
            'password' => $pass,
        ]); */
    }
}
