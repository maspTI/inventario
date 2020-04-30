<?php

use App\Brand;
use App\Pattern;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PatternsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pattern::insert([
            // Computadores
            [
                'brand_id' => $brand = Brand::where('name', 'dell')->first()->id,
                'name' => 'optplex 3010',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'optplex 990',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'optplex 390',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'optplex 7010',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'vostro 220s',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'vostro 200',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'xps',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'inspiron 7472',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'inspiron 3268',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'inspiron 530',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'latitude 3450',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'latitude 3440',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'latitude 3490',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'latitude 3470',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'latitude 3480',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'latitude 3400',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'latitude 7400',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Switches
            [
                'brand_id' => $brand,
                'name' => 's4112f',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'n1124t-on',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'n1108p-on',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Servidores
            [
                'brand_id' => $brand,
                'name' => 't420',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 't430',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 't300',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 't320',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'nx430',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'inspiron 530',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'optplex 7050',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'inspiron 7560',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Monitores
            [
                'brand_id' => $brand,
                'name' => 'e1914hc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'p2317h',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'e221hc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'e1912hc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'p2219h',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'e157fpc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Apple
            [
                'brand_id' => $brand = Brand::where('name', 'apple')->first()->id,
                'name' => 'macbook air',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'macbook pro',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'imac',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => Brand::where('name', 'lg')->first()->id,
                'name' => '20en33ssa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => Brand::where('name', 'lenovo')->first()->id,
                'name' => 'thinkvision',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => Brand::where('name', 'asus')->first()->id,
                'name' => 'mx279',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand = Brand::where('name', 'samsung')->first()->id,
                'name' => 'p2270',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'p2050',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'bx1930',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => $brand,
                'name' => 'bx1930n',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
