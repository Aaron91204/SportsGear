<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert
        	([
        		'firstname'=>'Geraldine',
        		'surname'=>'Ford',
        		'email'=>'GFord@ymail.com',
                'username'=>'GUnit',
        		'password'=>'Pass',
        	]);
            DB::table('staff')->insert
            ([
                'firstname'=>'Ross',
                'surname'=>'Dinsmore',
                'email'=>'RDinz@ymail.com',
                'username'=>'Dinz77',
                'password'=>'Pikachu',
            ]);
            DB::table('staff')->insert
            ([
                'firstname'=>'Ryan',
                'surname'=>'Comins',
                'email'=>'RComins@ymail.com',
                'username'=>'Comins66',
                'password'=>'Dominoes',
            ]);
            DB::table('staff')->insert
            ([
                'firstname'=>'Nathan',
                'surname'=>'Morrison',
                'email'=>'NMorrison@ymail.com',
                'username'=>'Morrison12',
                'password'=>'Hearts',
            ]);
            DB::table('staff')->insert
            ([
                'firstname'=>'Iain',
                'surname'=>'Weatherspoon',
                'email'=>'IWeatherspoon@ymail.com',
                'username'=>'Spooner',
                'password'=>'Golf',
            ]);
            
            DB::table('products')->insert
            ([
                'product_name'=>'Titleist Pro V',
                'slug'=> 'titleist-pro-v',
                'category'=>'Golf',
                'quantity'=>'100',
                'img'=>'TitleistProV1',
                'cost'=>'5',
            ]);
             DB::table('products')->insert
            ([
                'product_name'=>'Bow',
                'slug'=> 'bow',
                'category'=>'Archery',
                'quantity'=>'50',
                'img'=>'Bow',
                'cost'=>'20.34',
            ]);
             DB::table('products')->insert
            ([
                'product_name'=>'Baseball Bat',
                'slug'=> 'baseball-bat',
                'category'=>'Baseball',
                'quantity'=>'50',
                'img'=>'BaseBallBat',
                'cost'=>'14.39',
            ]);
             DB::table('products')->insert
            ([
                'product_name'=>'Baseball Ball',
                'slug'=> 'baseball-ball',
                'category'=>'Baseball',
                'quantity'=>'50',
                'img'=>'BaseBallBall',
                'cost'=>'5.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Basketall',
                'slug'=> 'basketball-ball',
                'category'=>'Basketball',
                'quantity'=>'50',
                'img'=>'BasketBallBall',
                'cost'=>'11.99',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Cricket Ball 6pk',
                'slug'=> 'cricket-6pk',
                'category'=>'Cricket',
                'quantity'=>'50',
                'img'=>'CricketBall',
                'cost'=>'39.00',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Wicketkeeper pads',
                'slug'=> 'wicketkeeper-pads',
                'category'=>'Cricket',
                'quantity'=>'50',
                'img'=>'CricketWicketKeeperPads',
                'cost'=>'17.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Wicketkepper gloves',
                'slug'=> 'wicketkeeper-gloves',
                'category'=>'Cricket',
                'quantity'=>'50',
                'img'=>'CricketWicketKeeperGloves',
                'cost'=>'22.74',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Stumps',
                'slug'=> 'cricket-stumps',
                'category'=>'Cricket',
                'quantity'=>'50',
                'img'=>'CricketStumps',
                'cost'=>'31.14',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Cricket Helmet',
                'slug'=> 'cricket-helmet',
                'category'=>'Cricket',
                'quantity'=>'50',
                'img'=>'CricketHelmet',
                'cost'=>'35.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Basketball Net Ring',
                'slug'=> 'basketball-net-ring',
                'category'=>'Basketball',
                'quantity'=>'50',
                'img'=>'CricketBackBoard',
                'cost'=>'95.94',
            ]); 
            DB::table('products')->insert
            ([
                'product_name'=>'Basketball Backboard',
                'slug'=> 'basketball-backboard',
                'category'=>'Basketball',
                'quantity'=>'50',
                'img'=>'CricketBackBoard',
                'cost'=>'103.17',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Football Size 4',
                'slug'=> 'football-size4',
                'category'=>'Football',
                'quantity'=>'50',
                'img'=>'FootballSize4',
                'cost'=>'5.99',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Goal Net',
                'slug'=> 'football-goal-net',
                'category'=>'Football',
                'quantity'=>'50',
                'img'=>'FootballGoalNet',
                'cost'=>'47.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Football Size 5',
                'slug'=> 'football-size5',
                'category'=>'Football',
                'quantity'=>'50',
                'img'=>'FootballSize5',
                'cost'=>'13.14',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Hockey Stick',
                'slug'=> 'hockey-stick',
                'category'=>'Hockey',
                'quantity'=>'50',
                'img'=>'HockeyStick',
                'cost'=>'20.00',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Shin Guards',
                'slug'=> 'hockey-shin-guards',
                'category'=>'Hockey',
                'quantity'=>'50',
                'img'=>'HockeyShinGuards',
                'cost'=>'4.74',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Hockey Helmet',
                'slug'=> 'hockey-helmet',
                'category'=>'Hockey',
                'quantity'=>'50',
                'img'=>'HockeyHelmet',
                'cost'=>'71.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Hockey Ball 6pk',
                'slug'=> 'hockey-ball-6pk',
                'category'=>'Hockey',
                'quantity'=>'50',
                'img'=>'HockeyBall6pk',
                'cost'=>'15.54',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Hockey Net',
                'slug'=> 'hockey-net',
                'category'=>'Hockey',
                'quantity'=>'50',
                'img'=>'HockeyNet',
                'cost'=>'135',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Netball Post',
                'slug'=> 'netball-post',
                'category'=>'Netball',
                'quantity'=>'50',
                'img'=>'NetballPost',
                'cost'=>'191.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Bibs',
                'slug'=> 'netball-bibs',
                'category'=>'Netball',
                'quantity'=>'50',
                'img'=>'NetballBibs',
                'cost'=>'47.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Netball Size 5 Ball',
                'slug'=> 'netball-size5',
                'category'=>'Netball',
                'quantity'=>'50',
                'img'=>'NetballSize5Ball',
                'cost'=>'10.74',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Badminton Net',
                'slug'=> 'badminton-net',
                'category'=>'Badminton',
                'quantity'=>'50',
                'img'=>'BadmintonNet',
                'cost'=>'26.65',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Net Post',
                'slug'=> 'badmiinton-net-post',
                'category'=>'Badminton',
                'quantity'=>'50',
                'img'=>'BadmintonNetPost',
                'cost'=>'461.89',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Shuttlecock',
                'slug'=> 'badminton-shittlecock',
                'category'=>'Badminton',
                'quantity'=>'50',
                'img'=>'BadmintonShuttleCock',
                'cost'=>'9.54',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Badminton Racquet',
                'slug'=> 'badminton-racquet',
                'category'=>'Badminton',
                'quantity'=>'50',
                'img'=>'BadmintonRacquet',
                'cost'=>'18.55',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Tennis Ball 6pk',
                'slug'=> 'tennis-ball-6pk',
                'category'=>'Tennis',
                'quantity'=>'50',
                'img'=>'TennisBall6pk',
                'cost'=>'15.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Tennis Net',
                'slug'=> 'tennis-net',
                'category'=>'Tennis',
                'quantity'=>'50',
                'img'=>'TennisNet',
                'cost'=>'154.80',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Beam Mat',
                'slug'=> 'gymnastics-beam-mat',
                'category'=>'Gymnastics',
                'quantity'=>'50',
                'img'=>'GymBeamMat',
                'cost'=>'239.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Squash Balls',
                'slug'=> 'squash-balls',
                'category'=>'Squash',
                'quantity'=>'50',
                'img'=>'TennisBall6pk',
                'cost'=>'27.60',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Tennis Racquet',
                'slug'=> 'tennis-racquet',
                'category'=>'Tennis',
                'quantity'=>'50',
                'img'=>'TennisRacquet',
                'cost'=>'16.64',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Squash Racquet',
                'slug'=> 'squash-racquet',
                'category'=>'Squash',
                'quantity'=>'50',
                'img'=>'SquashRacquet',
                'cost'=>'12.78',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Table Tennis Bat',
                'slug'=> 'table-tennis-bat',
                'category'=>'Table Tennis',
                'quantity'=>'50',
                'img'=>'TableTennisBat',
                'cost'=>'5.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Table Tennis Net',
                'slug'=> 'table-tennis-net',
                'category'=>'Table Tennis',
                'quantity'=>'50',
                'img'=>'TableTennisNet',
                'cost'=>'9.54',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Table Tennis Ball 6pk',
                'slug'=> 'table-tennis-ball6pk',
                'category'=>'Table Tennis',
                'quantity'=>'50',
                'img'=>'TableTennisBall6pk',
                'cost'=>'3',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Table Tennis Table',
                'slug'=> 'table-tennis-table',
                'category'=>'Table Tennis',
                'quantity'=>'50',
                'img'=>'TableTennisTable',
                'cost'=>'239.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'VolleyBall Ball',
                'slug'=> 'vollyball-ball',
                'category'=>'VolleyBall',
                'quantity'=>'50',
                'img'=>'VolleyBallBall',
                'cost'=>'16.64',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'VolleyBall Net',
                'slug'=> 'vollyball-net',
                'category'=>'VolleyBall',
                'quantity'=>'50',
                'img'=>'VolleyBallNet',
                'cost'=>'41.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'VolleyBall Post',
                'slug'=> 'basketball-post',
                'category'=>'VolleyBall',
                'quantity'=>'50',
                'img'=>'VolleyBallPosts',
                'cost'=>'582.89',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Hurling Stick',
                'slug'=> 'hurling-stick',
                'category'=>'Hurling',
                'quantity'=>'50',
                'img'=>'HurlingStick',
                'cost'=>'11.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Hurling Sliotar',
                'slug'=> 'hurling-sliotar',
                'category'=>'Hurling',
                'quantity'=>'50',
                'img'=>'HurlingSliotar',
                'cost'=>'7.14',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Hurling Helmet',
                'slug'=> 'hurling-helmet',
                'category'=>'Hurling',
                'quantity'=>'50',
                'img'=>'HurlingHelmet',
                'cost'=>'71.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Gaelic Football',
                'slug'=> 'gaelic-football',
                'category'=>'Gaelic',
                'quantity'=>'50',
                'img'=>'GaelicFootball',
                'cost'=>'8.34',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Judo Mat',
                'slug'=> 'judo-mat',
                'category'=>'Judo',
                'quantity'=>'50',
                'img'=>'JudoMat',
                'cost'=>'41.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Punch Bag',
                'slug'=> 'boxing-punch-bag',
                'category'=>'Boxing',
                'quantity'=>'50',
                'img'=>'BoxingPunchBag',
                'cost'=>'64.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Skipping Rope',
                'slug'=> 'boxing-skipping-rope',
                'category'=>'Boxing',
                'quantity'=>'50',
                'img'=>'BoxingSkippingRope',
                'cost'=>'17.09',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Boxing Gloves',
                'slug'=> 'boxing-gloves',
                'category'=>'Boxing',
                'quantity'=>'50',
                'img'=>'BoxingGloves',
                'cost'=>'19.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Boxing HeadGear',
                'slug'=> 'boxing-headgear',
                'category'=>'Boxing',
                'quantity'=>'50',
                'img'=>'BoxingHeadGear',
                'cost'=>'23.94',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'SpeedBall',
                'slug'=> 'boxing-speedball',
                'category'=>'Boxing',
                'quantity'=>'50',
                'img'=>'BoxingSpeedBall',
                'cost'=>'22.74',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'American Football',
                'slug'=> 'american-football',
                'category'=>'American Football',
                'quantity'=>'50',
                'img'=>'AmericanFootballBall',
                'cost'=>'19.14',
            ]);
    }
}
