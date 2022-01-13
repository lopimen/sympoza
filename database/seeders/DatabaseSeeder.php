<?php

namespace Database\Seeders;
use App\Models\Manuscript_Sympozia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $user_id = rand(1, 4);
            $paper_code = 'ISMEE-' . $user_id . '-' . rand(1, 100);
            $title = 'Title ' . $i;
            Manuscript_Sympozia::create([
                'user_id' => $user_id,
                'paper_code' => $paper_code,
                'title' => $title
            ]);
        }
    }
}
