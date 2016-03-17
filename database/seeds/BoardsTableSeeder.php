<?php

use Illuminate\Database\Seeder;
 
class BoardsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('boards')->delete();
 
        $boards = array(
            ['id' => 1, 'text' => 'Simple text #1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'text' => 'Simple text #2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'text' => 'Simple text #3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('boards')->insert($boards);
    }
 
}