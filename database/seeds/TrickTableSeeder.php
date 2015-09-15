<?php

use Illuminate\Database\Seeder;

class TricksTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tricks')->delete();

        $tricks = array(
            ['id' => 1, 'category_id' => 1, 'name' => 'Kickflip', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'category_id' => 1, 'name' => 'Heelflip', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'category_id' => 1, 'name' => 'Pop Shove It', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('tricks')->insert($tricks);
    }

}
