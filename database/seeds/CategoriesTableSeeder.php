<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [ 'T-shirts', 'Combinaisons', 'Pantalons'];
        foreach ( $categories as $category ) 
        {
        DB::table( 'categories' )->insert( [
            'name'       => trim( strtolower( $category ) ),
            'status'     => 1,
            'created_at' => Carbon::now(),
        ] );
        }
    }
}