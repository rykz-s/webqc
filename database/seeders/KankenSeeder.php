<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kanken;
use Carbon\Carbon;

class KankenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kanken::create([
            'nama' => 'Gema Adi P',
            'noengine' => 'JFHGB23234JU882',
            'shift' => 'Red',
            'tanggal' => Carbon::parse('2022-06-18'),
            'customCheckbox1' => '1',
            'customCheckbox2' => '1',
            'customCheckbox3' => '1',
            'customCheckbox4' => '1',
            'customCheckbox5' => '1',
            'customCheckbox6' => '1',
            'customCheckbox7' => '1',
            'customCheckbox8' => '1',
            'customCheckbox9' => '0',
            'customCheckbox10' => '1',
            'act1' => '10',
            'act2' => '12',
            'act3' => '7',
            'act4' => '8',
            'act5' => '20',
            'act7' => '9',
            'act8' => '18',
            'act9' => '6'
        ]);
    }
}
