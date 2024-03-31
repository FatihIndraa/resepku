<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Fatih Indra Maulana',
            'email'=>'fatihindra140903@gmail.com',
            'password'=>bcrypt('password')
        ]);
        User::factory(5)->create();
        // \App\Models\User::factory(10)->create();

        Post::factory(10)->create();


        // Post::create([
        //     'title'=>'judul pertama',
        //     'slug'=> 'pertama',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere animi mollitia
        //     aperiam delectus obcaecati! Suscipit',
        //     'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere animi mollitia
        //     aperiam delectus obcaecati! Suscipit, doloremque incidunt enim non voluptas
        //     mollitia quod officia similique modi natus corporis cum. Magni sed, sequi
        //     molestiae deleniti ipsum sapiente incidunt facilis nobis corrupti sit odio
        //     voluptas porro corporis eligendi ad unde fugiat esse dolores fuga eius, quisquam
        //     voluptates! Alias sed dolore consectetur voluptatem provident nisi mollitia
        //     excepturi exercitationem tenetur nulla. Dolorum quasi vel pariatur porro? Ullam,
        //     assumenda ab blanditiis consectetur labore laudantium non molestias quae ipsum
        //     temporibus veniam adipisci ratione quidem, debitis accusantium quos perferendis!
        //     Dolor facilis dicta mollitia veniam natus nemo a aut?',
        //     'category_id'=>'1',
        //     'user_id'=>'1'
            
        // ]);

        // Post::create([
        //     'title'=>'judul kedua',
        //     'slug'=> 'kedua',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere animi mollitia
        //     aperiam delectus obcaecati! Suscipit',
        //     'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere animi mollitia
        //     aperiam delectus obcaecati! Suscipit, doloremque incidunt enim non voluptas
        //     mollitia quod officia similique modi natus corporis cum. Magni sed, sequi
        //     molestiae deleniti ipsum sapiente incidunt facilis nobis corrupti sit odio
        //     voluptas porro corporis eligendi ad unde fugiat esse dolores fuga eius, quisquam
        //     voluptates! Alias sed dolore consectetur voluptatem provident nisi mollitia
        //     excepturi exercitationem tenetur nulla. Dolorum quasi vel pariatur porro? Ullam,
        //     assumenda ab blanditiis consectetur labore laudantium non molestias quae ipsum
        //     temporibus veniam adipisci ratione quidem, debitis accusantium quos perferendis!
        //     Dolor facilis dicta mollitia veniam natus nemo a aut?',
        //     'category_id'=>'1',
        //     'user_id'=>'2'
            
        // ]);

        // Post::create([
        //     'title'=>'judul ketiga',
        //     'slug'=> 'ketiga',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere animi mollitia
        //     aperiam delectus obcaecati! Suscipit',
        //     'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere animi mollitia
        //     aperiam delectus obcaecati! Suscipit, doloremque incidunt enim non voluptas
        //     mollitia quod officia similique modi natus corporis cum. Magni sed, sequi
        //     molestiae deleniti ipsum sapiente incidunt facilis nobis corrupti sit odio
        //     voluptas porro corporis eligendi ad unde fugiat esse dolores fuga eius, quisquam
        //     voluptates! Alias sed dolore consectetur voluptatem provident nisi mollitia
        //     excepturi exercitationem tenetur nulla. Dolorum quasi vel pariatur porro? Ullam,
        //     assumenda ab blanditiis consectetur labore laudantium non molestias quae ipsum
        //     temporibus veniam adipisci ratione quidem, debitis accusantium quos perferendis!
        //     Dolor facilis dicta mollitia veniam natus nemo a aut?',
        //     'category_id'=>'2',
        //     'user_id'=>'1'
            
        // ]);

        Category::create([
            'name'=>'food',
            'slug'=> 'food',
        ]);
        Category::create([
            'name'=>'drink',
            'slug'=> 'drink',
        ]);
        Category::create([
            'name'=>'snacks',
            'slug'=> 'snacks',
        ]);
    }
}
