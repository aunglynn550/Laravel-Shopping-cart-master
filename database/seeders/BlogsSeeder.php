<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blogs;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blogs::create([
            'title'=>'The Scout\'s FPL new signings',
            'description'=>'Get the lowdown on players
             who have moved clubs and how they can make 
             an impact in Fantasy
             Kevin Debruyne suddenly look at the space 
             he\'s got to work with and that\'s dangerous 
             because he can find someone like mahrez who 
             is just a matter of centimeter away from number
            five. Lovely little step-over.',
            'image'=>'football1.jpg',
            'created_at'=> now(),
            'updated_at'=>now()
        ]);
        Blogs::create([
            'title'=>'Summer 2022 Transfers & News 2',
            'description'=>'See the latest signings and exits at Premier League clubs as Arsenal sign Oleksandr Zinchenko
            Manchester city 
            is still on for what would be a spectacular travel.
            City surging into the fa cup semi final with trophies being line up home and abroad.',
            'image'=>'football2.jpg',
            'created_at'=> now(),
            'updated_at'=>now()
        ]); 
        Blogs::create([
            'title'=>'FPL new signings: Lingard can be a bargain',
            'description'=>'The Scout says managers should monitor a kind schedule and a return to form for the Forest signing',
            'image'=>'football3.jpg',
            'created_at'=> now(),
            'updated_at'=>now()
        ]);
            Blogs::create([
            'title'=>'FPL Lessons: Nunez haul forces rethink in Fantasy',
            'description'=>'Liverpool forward rises in ownership after scoring four goals in win over RB Leipzig
            I saw a woman who is about to lose the father of her little daughter offering so much care for her 
            husband rather than  fear, self-pity, disappointment of losing. 
            She definately the one the who care so much about other side.',
            'image'=>'football4.jpg',
            'created_at'=> now(),
            'updated_at'=>now()
        ]);
    }
}
