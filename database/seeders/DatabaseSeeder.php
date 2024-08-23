<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        if(Category::all()->count() == 0){

            foreach ($this-> categories as $category){
                
                Category::create([
                    'name' => $category
                ]);
            }
        }

        User::factory(1)->create();
        Article::factory(20)->create();

        
    }
}
