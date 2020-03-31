<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => '1',
                'name'       => 'Lead',
                'created_at' => '2020-03-29 21:45:33',
                'updated_at' => '2020-03-29 21:45:33',
            ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2020-03-29 21:45:33',
                'updated_at' => '2020-03-29 21:45:33',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2020-03-29 21:45:33',
                'updated_at' => '2020-03-29 21:45:33',
            ],
        ];

        CrmStatus::insert($crmStatuses);

    }
}
