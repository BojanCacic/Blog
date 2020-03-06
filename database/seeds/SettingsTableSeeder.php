<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Laravel Blog',
            'address' => 'Your address',
            'contact_number' => '000 1111 222',
            'contact_email' => 'your@email.com'
        ]);
    }
}
