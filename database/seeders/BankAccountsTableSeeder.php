<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BankAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bank_accounts')->insert([ 
            [ 
                'user_id' => 1, // ID user yang terkait 
                'bank_name' => 'Bank Central Asia', 
                'account_number' => '1234567890', 
                'status' => 'active', 
                'created_at' => now(), 
                'updated_at' => now() 
            ], 
            [ 
                'user_id' => 2, 
                'bank_name' => 
                'Bank Negara Indonesia', 
                'account_number' => '9876543210', 
                'status' => 'inactive', 
                'created_at' => now(), 
                'updated_at' => now() 
            ] 
        ]); 
    }
}
