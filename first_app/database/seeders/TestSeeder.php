<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            [
                'text' => 'なんと宝箱はパンドラボックスだった！',
                'name' => 'Pandora',
                'created_at' => Now(),
                'updated_at' => Now(),
            ],
            [
                'text' => '今日もJR西日本をご利用いただきましてありがとうございます',
                'name' => 'JR-west',
                'created_at' => Now(),
                'updated_at' => Now(),
            ],
        ]);
        
    }
}
