<?php

use App\Datatable;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DatatablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datatable::truncate();
        $faker = Factory::create();

        for($i=0; $i<50; $i++)
        {
            if(rand(0,1)==0) {
                $gender='Male';
            }
            else{
                $gender='Female';
            }

            if(rand(0,5)==0) {
                $country='Australia';
            }
            else if(rand(0,5)==1){
                $country='Canada';
            }
            else if(rand(0,5)==2){
                $country='Newzealand';
            }
            else if(rand(0,5)==3){
                $country='bangladesh';
            }
            else if(rand(0,5)==4){
                $country='America';
            }else{
                $country='India';
            }

                Datatable::create([
                    'firstname' => $faker->unique()->firstName,
                    'lastname' => $faker->unique()->lastName,
                    'email'     => $faker->unique()->email,
                    'job' => $faker->jobTitle,
                    'gender' => $gender,
                    'age' => $faker->numberBetween(20, 80),
                    'points' => $faker->numberBetween(0, 1000),
                    'notes' => $faker->text(100),
                    'country' => $country,
                    'sale_date' => $faker->dateTimeBetween('2017-09-15','2017-10-20')

                ]);

        }

    }
}
