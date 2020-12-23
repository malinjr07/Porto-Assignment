<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Fake;
use App\Adress;

class AdressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 95; $i++) { 
            $dummy = Fake::create();
            $company = $dummy->unique()->company;
            $street_adress = $dummy->streetAddress;
            $street_name=$dummy->streetName;
            $adress=$street_name." , ".$street_adress;
            $p_code = $dummy->postcode;
            $city = $dummy->city;
            $phn_num = $dummy->e164PhoneNumber;
            $code=$dummy->unique()->numberBetween(1,95);

            Adress::create([
                'company_name'=>$company,
                'city'=>$city,
                'phn_num'=>$phn_num,
                'post_code'=>$p_code,
                'full_adress'=>$adress,
                'state_key'=>random_int(1,25),
                'user_code'=>$code,
            ]);
        }
    }
}
