<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Iluminate\Database\Console\Seeds\WithoutModelEvents;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'comic', 'novel', 'fantasy'
    ];

            foreach ($data as $value) {
                Category::insert([
                    'name'=> $value
                ]);
            }
    }
}
