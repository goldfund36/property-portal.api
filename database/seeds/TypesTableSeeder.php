<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(__DIR__.'/../data/types.json'),true);
        foreach ($data as $el) {
            $type = new \App\Type();
            $type->id = $el['id'];
            $type->ru_name = $el['name']['ru'];
            $type->en_name = $el['name']['en'];
            $type->slug = $slug = Str::slug($el['name']['ru'], '-');
            $type->save();
        }
    }
}
