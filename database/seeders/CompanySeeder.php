<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'Barbearia São José',
            'email' => 'barber1@gmail.com',
            'document' => '88.308.113/0001-08',
            'phone' => '(54) 9 9968-1025',
        ]);
    }
}
