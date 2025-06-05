<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag; // Import the Tag model

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tags = [
            'cosa','caricatura','onomatopeya','paisaje','destruccion'];
        foreach ($tags as $name) {
            Tag::create(['name'=> $name]);
        }
    }
}
