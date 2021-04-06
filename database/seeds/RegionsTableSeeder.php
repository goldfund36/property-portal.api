<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(__DIR__.'/../data/regions.json'),true)['regions'];
        foreach ($data as $el) {
            $region = new \App\Region();
            $region->id = $el['id'];
            $region->ru_name = $el['name']['ru'];
            $region->en_name = $el['name']['en'];
            if($el['type'] === 'city') {
                $region->type = 2;
            } else {
                $region->type = 1;
            }
            $region->parent_id = $el['parent'];
            $region->slug = $slug = Str::slug($el['name']['ru'], '-');
            $region->save();
        }
    }
}
