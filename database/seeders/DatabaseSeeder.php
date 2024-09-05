<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    public $categories = [

        'elettronica',
        'abbigliamento',
        'salute e bellezza',
        'casa e giardinaggio',
        'giocattoli',
        'sport',
        'animali domestici',
        'libri e riviste',
        'accessori',
        'motori',
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (Category::all()->count() == 0) {

            foreach ($this->categories as $category) {

                Category::create([
                    'name' => $category
                ]);
            }
        }

        User::factory(1)->create();
        User::create([
            'name' => 'Sig. Revisore',
            'email' => 'revisore@gmail.com',
            'email_verified_at' => now(),
            'password' => 'revisore123',
            'remember_token' => Str::random(10),
            'is_revisor' => true
        ]);
        
        Article::factory(20)->create();
    }
}
