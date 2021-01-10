<?php

namespace Database\Seeders;

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

        //Seed for Genres
        if(DB::table('genres')->get()->count() == 0)
        {
            DB::table('genres')->insert(
            [
                [
                    'type' => 'Romance',
                    'note' => 'Not suitable for children under 14.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'type' => 'Drama',
                    'note' => 'Not suitable for children under 10.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'type' => 'Fantasy',
                    'note' => 'Suitable for all ages.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'type' => 'Adventure',
                    'note' => 'Suitable for all ages.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        }
        else
        {
            echo "\r\n\e[31m Genres table is not empty, therefore NOT \r\n";
        }

        //Seed for Producers
        if(DB::table('producers')->get()->count() == 0)
        {
            DB::table('producers')->insert(
            [
                [
                    'firstName' => 'David',
                    'lastName' => 'Heyman',
                    'dateOfBirth' => '1965-07-26',
                    'notableWork' => 'Harry Potter film series',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'firstName' => 'James',
                    'lastName' => 'Cameron',
                    'dateOfBirth' => '1954-08-16',
                    'notableWork' => 'The Terminator',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'firstName' => 'Jon',
                    'lastName' => 'Landau',
                    'dateOfBirth' => '1960-07-23',
                    'notableWork' => 'Avatar',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        }
        else
        {
            echo "\r\n\e[31m Producers table is not empty, therefore NOT \r\n";
        }

                //Seed for Producers
        if(DB::table('producers')->get()->count() == 0)
        {
            DB::table('producers')->insert(
            [
                [
                    'firstName' => 'David',
                    'lastName' => 'Heyman',
                    'dateOfBirth' => '1965-07-26',
                    'notableWork' => 'Harry Potter film series',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'firstName' => 'James',
                    'lastName' => 'Cameron',
                    'dateOfBirth' => '1954-08-16',
                    'notableWork' => 'The Terminator',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'firstName' => 'Jon',
                    'lastName' => 'Landau',
                    'dateOfBirth' => '1960-07-23',
                    'notableWork' => 'Avatar',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        }
        else
        {
            echo "\r\n\e[31m Producers table is not empty, therefore NOT \r\n";
        }
            //Seed for Producers
        if(DB::table('producers')->get()->count() == 0)
        {
            DB::table('producers')->insert(
            [
                [
                    'firstName' => 'David',
                    'lastName' => 'Heyman',
                    'dateOfBirth' => '1965-07-26',
                    'notableWork' => 'Harry Potter film series',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'firstName' => 'James',
                    'lastName' => 'Cameron',
                    'dateOfBirth' => '1954-08-16',
                    'notableWork' => 'The Terminator',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'firstName' => 'Jon',
                    'lastName' => 'Landau',
                    'dateOfBirth' => '1960-07-23',
                    'notableWork' => 'Avatar',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        }
        else
        {
            echo "\r\n\e[31m Producers table is not empty, therefore NOT \r\n";
        }
        //Seed for Movies
        if(DB::table('movies')->get()->count() == 0)
        {
            DB::table('movies')->insert(
            [
                [
                    'name' => 'Harry Potter and the Philosophers Stone',
                    'releaseYear' => '2001',
                    'language' => 'English',
                    'image' => 'https://static.wikia.nocookie.net/harrypotter/images/f/fb/PS_poster.jpg/revision/latest?cb=20180318153750',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Titanic',
                    'releaseYear' => '1997',
                    'language' => 'English',
                    'image' => 'https://images-na.ssl-images-amazon.com/images/I/51mTtUGvUCL._SY445_.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        }
        else
        {
            echo "\r\n\e[31m Movies table is not empty, therefore NOT \r\n";
        }

        //Seed for Movie-genres
        if(DB::table('movie_genres')->get()->count() == 0)
        {
            DB::table('movie_genres')->insert(
            [
                [
                    'movie_id' => 1,
                    'genre_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'movie_id' => 1,
                    'genre_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'movie_id' => 2,
                    'genre_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'movie_id' => 2,
                    'genre_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        }
        else
        {
            echo "\r\n\e[31m Movies-Genres table is not empty, therefore NOT \r\n";
        }

          //Seed for Movie-producers
          if(DB::table('movie_producers')->get()->count() == 0)
          {
              DB::table('movie_producers')->insert(
              [
                  [
                      'movie_id' => 1,
                      'producer_id' => 1,
                      'created_at' => date('Y-m-d H:i:s'),
                      'updated_at' => date('Y-m-d H:i:s'),
                  ],
                  [
                      'movie_id' => 2,
                      'producer_id' => 2,
                      'created_at' => date('Y-m-d H:i:s'),
                      'updated_at' => date('Y-m-d H:i:s'),
                  ],
                  [
                    'movie_id' => 2,
                    'producer_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                  ]
              ]);
          }
          else
          {
              echo "\r\n\e[31m Movies-Producers table is not empty, therefore NOT \r\n";
          }
    }
}
