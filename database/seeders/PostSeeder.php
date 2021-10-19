<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([
        //     'title' => 'Mon titre',
        //     'description' => 'azdidbizabdabpb xjlzhvlvs',
        //     'extrait' => 'alugdoazvd dablzjdb'

        // ]);
        
        Post::factory()->count(50)->create();
    }
}
