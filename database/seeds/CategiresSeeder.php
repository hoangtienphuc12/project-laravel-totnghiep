<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategiresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category_id'=>1,
                'category_name'=>'Gangbang',
                'category_slug'=>str::slug('Gangbang'),
            ],
            [
                'category_id'=>2,
                'category_name'=>'Vụng Trộm',
                'category_slug'=>str::slug('Vụng Trộm'),
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
