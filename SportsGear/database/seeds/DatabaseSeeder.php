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
                'product_name'=>'Wilson Staff 100 Iron',
                'slug'=> 'wilson-staff-100-iron',
                'category'=>'Golf',
                'quantity'=>'100',
                'img'=>'WilsonStaff100Iron',
                'cost'=>'200',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Cobra King F6+ Driver',
                'slug'=> 'cobra-king-f6-driver',
                'category'=>'Golf',
                'quantity'=>'100',
                'img'=>'CobraKingF6',
                'cost'=>'220',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Callaway Chev Mulligan Golf Shoes',
                'slug'=> 'callaway-chev-mulligan-golf-shoes',
                'category'=>'Golf',
                'quantity'=>'100',
                'img'=>'CallawayChevMulliganGolfShoes',
                'cost'=>'35',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Golfers Club Yellow Castle Tees',
                'slug'=> 'golfers-club-yellow-castle-tees',
                'category'=>'Golf',
                'quantity'=>'100',
                'img'=>'GolfersClubYellowCastleTees',
                'cost'=>'0.59',
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
                'product_name'=>'Mac Foam Tipped Arrows 3pk',
                'slug'=> 'mac-foam-tipped-arrows',
                'category'=>'Archery',
                'quantity'=>'50',
                'img'=>'MacFoamTippedArrows',
                'cost'=>'15',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Mybo Q5 Target Quiver',
                'slug'=> 'mybo-q5-target-quiver',
                'category'=>'Archery',
                'quantity'=>'50',
                'img'=>'MyboQ5TargetQuiver',
                'cost'=>'7.50',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Kinetic Fury Recurve Riser',
                'slug'=> 'kinetic-fury-recurve-riser',
                'category'=>'Archery',
                'quantity'=>'50',
                'img'=>'KineticFuryRecurveRiser',
                'cost'=>'263.33',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Mybo Victory Plus Release Aid',
                'slug'=> 'mybo-victory-plus-release-aid',
                'category'=>'Archery',
                'quantity'=>'50',
                'img'=>'MyboReleaseAid',
                'cost'=>'150',
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
                'product_name'=>'Batting Helmet',
                'slug'=> 'batting-helmet',
                'category'=>'Baseball',
                'quantity'=>'50',
                'img'=>'BattingHelmet',
                'cost'=>'49.95',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Turf Trainers',
                'slug'=> 'turf-trainers',
                'category'=>'Baseball',
                'quantity'=>'50',
                'img'=>'TurfTrainers',
                'cost'=>'69.95',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Catchers Set',
                'slug'=> 'catchers-set',
                'category'=>'Baseball',
                'quantity'=>'50',
                'img'=>'CatchersSet',
                'cost'=>'5.94',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Basketball',
                'slug'=> 'basketball-ball',
                'category'=>'Basketball',
                'quantity'=>'50',
                'img'=>'BasketBallBall',
                'cost'=>'11.99',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Knee-Sleeve',
                'slug'=> 'knee-sleeve',
                'category'=>'Basketball',
                'quantity'=>'50',
                'img'=>'KneeSleeve',
                'cost'=>'13.99',
            ]);
            DB::table('products')->insert
            ([
                'product_name'=>'Thigh Sleeve',
                'slug'=> 'thigh-sleeve',
                'category'=>'Basketball',
                'quantity'=>'50',
                'img'=>'ThighSleeve',
                'cost'=>'20',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Headbands',
                'slug'=> 'Headbands',
                'category'=>'Basketball',
                'quantity'=>'50',
                'img'=>'headbands',
                'cost'=>'14',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Basketball Black',
                'slug'=> 'basketball-black',
                'category'=>'Basketball',
                'quantity'=>'50',
                'img'=>'BasketballBlack',
                'cost'=>'20',
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
                'product_name'=>'Blue Gloves',
                'slug'=> 'blue-gloves',
                'category'=>'Football',
                'quantity'=>'50',
                'img'=>'BlueGloves',
                'cost'=>'90',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Kit Bag',
                'slug'=> 'kit-bag',
                'category'=>'Football',
                'quantity'=>'50',
                'img'=>'KitBag',
                'cost'=>'28',
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
                'product_name'=>'Blue Post',
                'slug'=> 'blue-post',
                'category'=>'Netball',
                'quantity'=>'50',
                'img'=>'BluePost',
                'cost'=>'10.74',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Thunder Netball',
                'slug'=> 'thunder-netball',
                'category'=>'Netball',
                'quantity'=>'50',
                'img'=>'ThunderNetball',
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
                'product_name'=>'Badminton Shoes',
                'slug'=> 'badminton-shoes',
                'category'=>'Badminton',
                'quantity'=>'50',
                'img'=>'BadmintonShoes',
                'cost'=>'30',
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
                'product_name'=>'Tennis Racquet',
                'slug'=> 'tennis-racquet',
                'category'=>'Tennis',
                'quantity'=>'50',
                'img'=>'TennisRacquet',
                'cost'=>'16.64',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Tennis Shoes',
                'slug'=> 'tennis-shoes',
                'category'=>'Tennis',
                'quantity'=>'50',
                'img'=>'TennisShoes',
                'cost'=>'70.95',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Tennis Bag',
                'slug'=> 'tennis-bag',
                'category'=>'Tennis',
                'quantity'=>'50',
                'img'=>'TennisBag',
                'cost'=>'45.95',
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
                'product_name'=>'Table Tennis Shoes',
                'slug'=> 'table-tennis-shoes',
                'category'=>'Table Tennis',
                'quantity'=>'50',
                'img'=>'TableTennisShoes',
                'cost'=>'69.99',
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
                'slug'=> 'volleyball-post',
                'category'=>'VolleyBall',
                'quantity'=>'50',
                'img'=>'VolleyBallPosts',
                'cost'=>'582.89',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Vollyball Knee Pads',
                'slug'=> 'vollyball-knee-pads',
                'category'=>'VolleyBall',
                'quantity'=>'50',
                'img'=>'VollyballKneePads',
                'cost'=>'2.89',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Volleyball Shoes',
                'slug'=> 'volleyball-shoes',
                'category'=>'VolleyBall',
                'quantity'=>'50',
                'img'=>'VolleyballShoes',
                'cost'=>'50.89',
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
                'product_name'=>'Hurling Grip',
                'slug'=> 'hurling-gript',
                'category'=>'Hurling',
                'quantity'=>'50',
                'img'=>'HurlingGrip',
                'cost'=>'3',
            ]);

            DB::table('products')->insert
            ([
                'product_name'=>'Helmet Liner',
                'slug'=> 'helmet-liner',
                'category'=>'Hurling',
                'quantity'=>'50',
                'img'=>'HelmetLiner',
                'cost'=>'12',
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
    }
}
