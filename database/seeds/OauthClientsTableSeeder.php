<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OauthClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
            'id' => '12345',
            'secret' => '70PS3cR37',
            'name' => 'IonicApp',
        ]);
    }
}
