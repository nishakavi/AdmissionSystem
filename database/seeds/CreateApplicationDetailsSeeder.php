<?php

use Illuminate\Database\Seeder;

class CreateApplicationDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblapplication')->insert([
            'ApplicationId'=>time(),
            'ReferenceId'=>123456,
            'DistrictCode'=>random_int(1,25),
            'SubmittedDate'=>new DateTime,
            'LastModifiedDate'=>new DateTime,
            'ApplicationStatus' => 'SUBMITTED',
            'EffectiveDate'=>new DateTime,
            'AccessedUser' => random_int(1,100)
        ]);

        DB::table('tblapplicantDetails')->insert([
            'DetailId'=>time(),
            'ReferenceId'=>123456,
            'FirstName'=>'Suthagar',
            'LastName'=>'Kailayapathy',
            'DateofBirth'=>new DateTime,
            'Gender' => 'MALE',
            'EffectiveDate'=>new DateTime
        ]);    }
}
