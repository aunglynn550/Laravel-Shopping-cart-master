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
            'author'=>'koaung',
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
            'author'=>'koaung',
            'created_at'=> now(),
            'updated_at'=>now()
        ]); 
        Blogs::create([
            'title'=>'FPL new signings: Lingard can be a bargain',
            'description'=>'The Scout says managers should monitor a kind schedule
             and a return to form for the Forest signing After Bradley Cooper and Lady Gaga’s tantalizing piano seat snuggle fest, it only felt right that A Star Is Born clinched the Oscar for Best Original Song.

             Related: 20 Best, Worst and Most WTF Oscars 2019 Moments
             
             The four songwriters – Lady Gaga, Mark Ronson, Andrew Rossomando and Andrew Wyatt – walked onstage to accept the award just as they did at the Golden Globes, where it won for Best Original Song and at the Grammy Awards earlier this month where it won for Best Pop Duo/Group Performance. Only when they got to the podium this time, Gaga took centerstage.
             
             “If you are at home and you’re sitting on your couch and you’re watching this right now, all I have to say is this is hard work,” she began with tears welling up her eyes. “I have worked hard for a long time and and it’s not about winning. What it’s about is not giving up. If you have a dream, fight for it. There’s a discipline for passion: it’s not about how many times you get rejected or you fall down and get beaten up, but how many times you stand up, and are brave and you keep on going.”',
            'image'=>'football3.jpg',
            'author'=>'koaung',
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
            'author'=>'koaung',
            'created_at'=> now(),
            'updated_at'=>now()
        ]);

        Blogs::create([
            'title'=>'Manchester United close to agreeing £59.2m deal for Casemiro | Good Morning Transfers',
            'description'=>'
            Exclusive: Real Madrid midfielder had not been part of Erik ten Hag\'s plans, but dismal start to the season has forced United\'s hand
            Siddique Malik
            2 hours ago (edited)
            This could be a great signing for us. Definitely more important than someone like de jong.  We haven\'t had a proper CDM for a long time.  Just hoping he isn\'t coming to us as a retirement club.  Feels a little bit like a Varane part 2.  Real Madrid rarely let a high level player go so hoping he doesn\'t become a part timer who doesn\'t really care like Varane has.
            She definately the one the who care so much about other side.listen i know we were just watching
            training but this is not a drill
            manchester united are getting a
            defensive midfielder and an elite one at
            that now casemiro has been so core to
            the european success and domestic
            success that real madrid have he\'s been
            part of an exceptional midfield with
            tony cruz and luka modric and obviously
            rael are going through this period of
            evolution getting younger guys in like
            kamavinga and to shimani so for them
            this deal while they don\'t really want
            to let the player go it makes sense it\'s
            getting big wages up the books it allows
            them to progress forward
            the player he wants a new challenge
            carlo ancelotti says it is his desire
            he\'s not tried to talk casemiro out of
            it the players want everything there is
            at real madrid and he\'s focused now on
            what lies ahead for him
            obviously united don\'t have his
            attributes in the squad we\'ve seen them
            already this season struggle in terms of
            aerial prowess, aggression out of positionstability in the transition protecting
            their offensive actions on the back line
            he will offer all of that to them.',
            'image'=>'casemiro.jpg',
            'author'=>'koaung',
            'created_at'=> now(),
            'updated_at'=>now()
        ]);

        Blogs::create([
            'title'=>'Ajax head coach Alfred Schreuder talk about Anthony Future',
            'description'=>'I disapprove if we were to sell another
            player, I think we are very strong financially. I have a
            good feeling about it of course it\'s
            difficult I understand the lad but he
            plays for ajax. So these clubs do come
            knocking on the door. We are playing in
            the champions league and i don\'t think manchester united are.',
            'image'=>'ajaxcoach.jpg',
            'author'=>'koaung',
            'created_at'=> now(),
            'updated_at'=>now()
        ]);
    }
}
