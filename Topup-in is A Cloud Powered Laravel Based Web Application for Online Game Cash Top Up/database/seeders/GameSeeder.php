<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
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
                'genre_id' => 1,
                'game_type_id' => 1,
                'name' => 'Valorant',
                'description' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak',
            ],
            [
                'genre_id' => 4,
                'game_type_id' => 2,
                'name' => 'Mobile Legends Bang Bang',
                'description' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak',
            ],
            [
                'genre_id' => 3,
                'game_type_id' => 2,
                'name' => 'AOV',
                'description' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak',
            ]
        ];

        foreach($data as $row){
            Game::create([
                'genre_id' => $row['genre_id'],
                'game_type_id' => $row['game_type_id'],
                'name' => $row['name'],
                'description' => $row['description'],
            ]);
        }
    }
}
