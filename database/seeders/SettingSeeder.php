<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'title',
            'content' => 'Meu Site'
        ]);
        Setting::create([
            'name' => 'subtitle',
            'content' => 'Este é meu subtitulo'
        ]);
        Setting::create([
            'name' => 'email',
            'content' => 'contato@email.com'
        ]);
        Setting::create([
            'name' => 'bgcolor',
            'content' => '#000000'
        ]);
        Setting::create([
            'name' => 'textcolor',
            'content' => '#ffffff'
        ]);
    }
}
