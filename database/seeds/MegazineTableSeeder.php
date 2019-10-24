<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MegazineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 1; $i++) { 
            $sourceDir = UploadedFile::fake()->create('1.pdf');
            $uploadDir = Storage('app/files/projects/documentation/');
	    	DB::table('books')->insert([
                'user_id' => 'A',
                'specialization_id' => rand(1,13),
                'name' => $faker->name,
                'cost' => rand(100,1200),
                'pages' =>rand(5,60),
                'documentation' => $faker->file($sourceDir, $targetDir, false) ,
                // 'synopsis' => $faker->file($sourceDir, $targetDir, false) ,
                // 'preview' => $faker->file($sourceDir, $targetDir, false) ,
                // 'ppt' => $faker->file($sourceDir, $targetDir, false) ,
                'description' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
	        ]);
    	}
    }
}
