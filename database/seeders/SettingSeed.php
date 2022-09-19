<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(
            [
                'name' => 'title',
                'content' => 'Meu Site'
            ],
            [
                'name' => 'subtitle',
                'content' => 'Este é meu subtitulo'
            ],
            [
                'name' => 'email',
                'content' => 'contato@email.com'
            ],
            [
                'name' => 'bgcolor',
                'content' => '#000000'
            ],
            [
                'name' => 'textcolor',
                'content' => '#ffffff'
            ]
        );
    }
}
