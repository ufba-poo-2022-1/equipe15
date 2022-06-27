<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Despesa;
use Carbon\Carbon;

class DespesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('despesas')->insert(
            [
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 1,
                    'ini_date'=> '2022-01-29',
                    // 'end_date'=> '2022-02-29',
                    'deadline'=> 23,
                    'relevance'=> 1,
                    'type'=> 2,
                    'value'=> 658,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-01-01',
                    // 'end_date'=> '2022-05-29',
                    'deadline'=> 24,
                    'relevance'=> 2,
                    'type'=> 4,
                    'value'=> 551,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 1,
                    'ini_date'=> '2022-01-03',
                    // 'end_date'=> '2022-04-25',
                    'deadline'=> 3,
                    'relevance'=>2,
                    'type'=>3,
                    'value'=> 235,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-02-02',
                    // 'end_date'=> '2022-04-12',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>3,
                    'value'=> 521,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-02-05',
                    // 'end_date'=> '2022-04-12',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>1,
                    'value'=> 587,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-02-08',
                    // 'end_date'=> '2022-04-12',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>1,
                    'value'=> 145,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-03-13',
                    // 'end_date'=> '2022-04-12',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>5,
                    'value'=> 254,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-03-23',
                    // 'end_date'=> '2022-04-12',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>5,
                    'value'=>656,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-03-10',
                    // 'end_date'=> '2022-04-12',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>4,
                    'value'=> 265,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-04-14',
                    // 'end_date'=> '2022-04-19',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>4,
                    'value'=> 563,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-04-24',
                    // 'end_date'=> '2022-04-12',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>4,
                    'value'=> 458,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-04-19',
                    // 'end_date'=> '2022-04-12',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>3,
                    'value'=> 544,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-05-19',
                    // 'end_date'=> '2022-06-03',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>2,
                    'value'=> 214,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-05-19',
                    // 'end_date'=> '2022-06-12',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>2,
                    'value'=> 356,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-05-19',
                    // 'end_date'=>' 2022-06-21',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>5,
                    'value'=> 700,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-06-19',
                    // 'end_date'=>' 2022-07-21',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>2,
                    'value'=> 152,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-06-21',
                    // 'end_date'=>' 2022-07-21',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>4,
                    'value'=> 254,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-06-12',
                    // 'end_date'=>' 2022-07-21',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>1,
                    'value'=> 545,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-07-12',
                    // 'end_date'=>' 2022-08-21',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>3,
                    'value'=> 444,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-07-21',
                    // 'end_date'=>' 2022-08-26',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>5,
                    'value'=> 452,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-07-31',
                    // 'end_date'=>' 2022-08-31',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>5,
                    'value'=> 125,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-08-21',
                    // 'end_date'=>' 2022-09-21',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>1,
                    'value'=> 232,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-08-26',
                    // 'end_date'=>' 2022-09-29',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>1,
                    'value'=> 432,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-08-13',
                    // 'end_date'=>' 2022-09-12',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>3,
                    'value'=> 142,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-09-13',
                    // 'end_date'=>' 2022-10-12',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>2,
                    'value'=> 321,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],


                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-09-21',
                    // 'end_date'=>' 2022-10-22',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>2,
                    'value'=> 543,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-09-30',
                    // 'end_date'=>' 2022-10-29',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>1,
                    'value'=> 654,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-10-21',
                    // 'end_date'=>' 2022-11-22',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>3,
                    'value'=> 245,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-10-12',
                    // 'end_date'=>' 2022-11-14',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>5,
                    'value'=> 147,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-10-14',
                    // 'end_date'=>' 2022-11-15',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>1,
                    'value'=> 547,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],


                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-11-21',
                    // 'end_date'=>' 2022-12-22',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>2,
                    'value'=> 647,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-11-11',
                    // 'end_date'=>' 2022-12-12',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>4,
                    'value'=> 357,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-11-22',
                    // 'end_date'=>' 2022-12-16',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>5,
                    'value'=> 75,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-12-11',
                    // 'end_date'=>' 2023-01-11',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>3,
                    'value'=> 99,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],


                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-12-31',
                    // 'end_date'=>' 2023-01-30',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>5,
                    'value'=> 55,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],

                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-12-25',
                    // 'end_date'=> '2023-01-24',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>1,
                    'value'=> 565,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ]
            ]
        );
    }

}
