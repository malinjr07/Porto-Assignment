<?php

use Illuminate\Database\Seeder;
use App\SalesMan;
use Faker\Factory as Fake;
use Illuminate\Support\Str;

class SellerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 95; $i++) {
            $d = Fake::create();
            $f_name = $d->unique()->firstName;
            $m_name = $d->unique()->firstName;
            $company = $d->company;
            $l_name = $d->unique()->lastName;
            $mail = $d->unique()->safeEmail;
            $user=Str::slug(rand(10,99).$f_name.rand(1,9).$l_name);

            SalesMan::create([
                'first_name' => $f_name,
                'middle_name' => $m_name,
                'last_name' => $l_name,
                'shop_name' => $company,
                'username' => $user,
                'image'=>'public/all/admin/uploads/user/video1.png',
                'email' => $mail,
                'password' => '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa',
            ]);
        };
    }
}
