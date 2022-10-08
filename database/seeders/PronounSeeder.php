<?php

namespace Database\Seeders;

use App\Models\Pronoun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PronounSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pronoun::insert([
            ['word' => 'he'],
            ['word' => 'him'],
            ['word' => 'she'],
            ['word' => 'her'],
            ['word' => 'they'],
            ['word' => 'them']
        ]);
    }
}
