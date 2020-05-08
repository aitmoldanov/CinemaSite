<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

DB::table('movie')->insert([
    'name' => 'Boruto: Naruto the Movie',
    'genre' => 'Action, Comedy, Animation',
    'date' => 'August 7, 2015',
    'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/1k6iwC4KaPvTBt1JuaqXy3noZRY.jpg',
    'plan' => 'HD',
    'type' => 'cartoon'
]);
        DB::table('movie')->insert([
            'name' => 'The Grinch',
            'genre' => 'Animation, Family, Comedy, Fantasy',
            'date' => 'November 8, 2018',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/stAu0oF6dYDhV5ssbmFUYkQPtCP.jpg',
            'plan' => '4K',
            'type' => 'cartoon'
        ]);
        DB::table('movie')->insert([
            'name' => 'Minions',
            'genre' => 'Family, Animation, Adventure, Comedy',
            'date' => 'June 17, 2015',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/tMaGZ2HR8HAFwkx4YRib0CDVfNT.jpg',
            'plan' => 'Full HD',
            'type' => 'cartoon'
        ]);
        DB::table('movie')->insert([
            'name' => 'The Lion King',
            'genre' => 'Adventure, Family',
            'date' => 'July 7, 2019',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/2bXbqYdUdNVa8VIWXVfclP2ICtT.jpg',
            'plan' => '4K',
            'type' => 'cartoon'
        ]);
        DB::table('movie')->insert([
            'name' => 'Toy Story 4',
            'genre' => 'Adventure, Animation, Comedy, Family, Fantasy',
            'date' => 'June 19, 2019',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/w9kR8qbmQ01HwnvK4alvnQ2ca0L.jpg',
            'plan' => 'Full HD',
            'type' => 'cartoon'
        ]);
        //Films

        DB::table('movie')->insert([
            'name' => 'T-34',
            'genre' => 'War, Action',
            'date' => 'December 27, 2018',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/jqBIHiSglRfNxjh1zodHLa9E7zW.jpg',
            'plan' => '4K',
            'type' => 'film'

        ]);
        DB::table('movie')->insert([
            'name' => 'Maleficent: Mistress of Evil',
            'genre' => 'Fantasy, Family, Adventure',
            'date' => 'October 16, 2019',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/vloNTScJ3w7jwNwtNGoG8DbTThv.jpg',
            'plan' => '4K',
            'type' => 'film'
        ]);
        DB::table('movie')->insert([
            'name' => 'Bloodshot',
            'genre' => 'Action, Science Fiction',
            'date' => 'Mar 05, 2020',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/8WUVHemHFH2ZIP6NWkwlHWsyrEL.jpg',
            'plan' => 'Full HD',
            'type' => 'film'
        ]);
        DB::table('movie')->insert([
            'name' => 'Parasite',
            'genre' => 'Comedy, Thriller, Drama',
            'date' => 'May 30, 2019',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
            'plan' => 'Full HD',
            'type' => 'film'
        ]);
        DB::table('movie')->insert([
            'name' => '1917',
            'genre' => 'War, Drama, Action, Thriller, History',
            'date' => 'Dec 25, 2019',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/iZf0KyrE25z1sage4SYFLCCrMi9.jpg',
            'plan' => '4K',
            'type' => 'film'
        ]);

        //Serial
        DB::table('movie')->insert([
            'name' => 'The Witcher',
            'genre' => 'Action, Adventure, Fantasy',
            'date' => '16',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/zrPpUlehQaBf8YX2NrVrKK8IEpf.jpg',
            'plan' => 'Full HD',
            'type' => 'serial'
        ]);
        DB::table('movie')->insert([
            'name' => 'Peaky Blinders',
            'genre' => 'Crime, Drama',
            'date' => '37',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/6PX0r5TRRU5y0jZ70y1OtbLYmoD.jpg',
            'plan' => 'HD',
            'type' => 'serial'
        ]);
        DB::table('movie')->insert([
            'name' => 'YOU',
            'genre' => 'Crime, Drama',
            'date' => '10',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/9qZUrhcFVI9MNznVJxdfcrmifof.jpg',
            'plan' => 'Full HD',
            'type' => 'serial'
        ]);
        DB::table('movie')->insert([
            'name' => 'The Stranger',
            'genre' => 'Drama, Mystery',
            'date' => '8',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/qKtjZ6f8ip6M7pYiDcVs0QXUAly.jpg',
            'plan' => '4K',
            'type' => 'serial'
        ]);
        DB::table('movie')->insert([
            'name' => 'Ozark',
            'genre' => 'Crime, Drama, Thriller',
            'date' => '30',
            'image' => 'https://image.tmdb.org/t/p/w94_and_h141_bestv2/oy7Peo5iFIt9sNM59lN6csbJeX2.jpg',
            'plan' => 'HD',
            'type' => 'serial'
        ]);
    }
}
