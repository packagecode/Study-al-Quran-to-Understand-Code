<?php

use Illuminate\Database\Seeder;
use App\Setting;
use Illuminate\Support\Facades\Hash;
use App\User;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'data' => 'title',
            'value' => 'Study Al Quran To Understand'
        ]);
        Setting::create([
            'data' => 'description',
            'value' => 'A New Way Of Possibility.'
        ]);
        Setting::create([
            'data' => 'address',
            'value' => 'ঢাকা ১০০০, বাংলাদেশ ।'
        ]);
        Setting::create([
            'data' => 'phone',
            'value' => '+৮৮০১৫৫৩৫৬৯২৪৬'
        ]);
        Setting::create([
            'data' => 'email',
            'value' => 'info@studyalqurantounderstand.org'
        ]);
        Setting::create([
            'data' => 'facebook',
            'value' => 'https://facebook.com'
        ]);
        Setting::create([
            'data' => 'twitter',
            'value' => 'https://twitter.com/'
        ]);
        Setting::create([
            'data' => 'youtube',
            'value' => 'https://youtube.com'
        ]);
        Setting::create([
            'data' => 'instagram',
            'value' => 'https://www.instagram.com/'
        ]);
        Setting::create([
            'data' => 'google+',
            'value' => 'http://google.com'
        ]);
        Setting::create([
            'data' => 'linkedin',
            'value' => 'https://linkedin.com/'
        ]);
        Setting::create([
            'data' => 'logo',
            'value' => ''
        ]);
        User::create([
            'name' => 'Shihab Uddin',
            'email' => 'mdshihabuddinm@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
