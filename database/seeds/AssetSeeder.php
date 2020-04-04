<?php

class AssetSeeder extends SeederBase
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assets = $this->loadData('assets');
        $assetPrices = $this->loadData('assetPrices');        

        DB::table('assets')->insert($assets);
        DB::table('asset_prices')->insert($assetPrices);
    }
}
