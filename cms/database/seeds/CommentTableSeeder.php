<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Comment::insert([
            [   
                'id' => '1',
                'commenter' => 'Rahmat Ibrahim',
                'comment_text' => 'Ajiib Cooy',
                'comment_time' => '02 Oktober 2020'
            ],
            [   
                'id' => '2',
                'commenter' => 'Dhika Ainul',
                'comment_text' => 'Mantap Slurr',
                'comment_time' => '01 Oktober 2020'
            ],
            [   
                'id' => '3',
                'commenter' => 'Saiful Anwar',
                'comment_text' => 'Settong Dereh',
                'comment_time' => '30 September 2020'
            ],
            [   
                'id' => '4',
                'commenter' => 'Dina Rachma',
                'comment_text' => 'Bangga menjadi bangsa Indonesia',
                'comment_time' => '29 September 2020'
            ],
            [   
                'id' => '5',
                'commenter' => 'Lutfi Umami',
                'comment_text' => 'I Love Indonesia',
                'comment_time' => '28 September 2020'
            ],
            [   
                'id' => '6',
                'commenter' => 'Aji Dharma',
                'comment_text' => 'Wow. Terbaik!',
                'comment_time' => '27 September 2020'
            ],
            [   
                'id' => '7',
                'commenter' => 'Irfan Syahruddin',
                'comment_text' => 'Mbois Sam.',
                'comment_time' => '26 September 2020'
            ],
            [   
                'id' => '8',
                'commenter' => 'Novia Putri',
                'comment_text' => 'Mari lestarikan Tradisi leluhur kita',
                'comment_time' => '25 September 2020'
            ]
        ]);
    }
}
