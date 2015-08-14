<?php

use Illuminate\Database\Seeder;
use App\Text;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10000; $i ++) {
            Text::create([
                'title'   => bin2hex(openssl_random_pseudo_bytes(20)),
                'content' => bin2hex(openssl_random_pseudo_bytes(200))
            ]);
        }
    }
}
