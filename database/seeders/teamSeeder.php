<?php

namespace Database\Seeders;

use App\Models\team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team_name = new team();
        $team_name->name = 'Pittsburgh Steelers';
        $team_name->city = 'Pittsburgh';
        $team_name->titles = 0;
        $team_name->logo = 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Pittsburgh_Steelers_logo.svg/1200px-Pittsburgh_Steelers_logo.svg.png';
        $team_name->save();

        $team_name = new team();
        $team_name->name = 'Baltimore Ravens';
        $team_name->city = 'Baltimore';
        $team_name->titles = 2;
        $team_name->logo = 'https://a.espncdn.com/combiner/i?img=/i/teamlogos/nfl/500/bal.png';
        $team_name->save();

        $team_name = new team();
        $team_name->name = 'New England Patriots';
        $team_name->city = 'Foxborough';
        $team_name->titles = 6;
        $team_name->logo = 'https://upload.wikimedia.org/wikipedia/en/b/b9/New_England_Patriots_logo.svg';
        $team_name->save();

        $team_name = new team();
        $team_name->name = 'Dallas Cowboys';
        $team_name->city = 'Dallas';
        $team_name->titles = 5;
        $team_name->logo = 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Dallas_Cowboys.svg/1076px-Dallas_Cowboys.svg.png';
        $team_name->save();
    }
}
