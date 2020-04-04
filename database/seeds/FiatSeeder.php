<?php

class FiatSeeder extends SeederBase
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fiats = $this->loadData('fiats');

        DB::table('fiats')->insert($fiats);
    }
}
