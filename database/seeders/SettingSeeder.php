<?php

// database/seeders/SettingSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting; // Gunakan model Setting

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::create(['key' => 'company_name', 'value' => 'PT Plastik Hebat Indonesia']);
        Setting::create(['key' => 'company_email', 'value' => 'info@plastikhebat.com']);
        Setting::create(['key' => 'phone_number', 'value' => '021-555-1234']);
        Setting::create(['key' => 'main_address', 'value' => 'Jl. Industri Raya No. 45, Kawasan Industri Cikarang, Bekasi, Jawa Barat']);
        Setting::create(['key' => 'facebook_url', 'value' => 'https://facebook.com/plastikhebat']);
        Setting::create(['key' => 'instagram_url', 'value' => 'https://instagram.com/plastikhebat']);
        Setting::create(['key' => 'site_description', 'value' => 'Produsen biji plastik dan kemasan terkemuka di Indonesia.']);
    }
}