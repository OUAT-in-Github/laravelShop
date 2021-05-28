<?php
use App\Product;

use Illuminate\Database\Seeder;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(test::class, 200)->create();

    }
}
