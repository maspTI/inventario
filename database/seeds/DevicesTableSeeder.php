<?php

use App\User;
use App\Brand;
use App\Device;
use App\Pattern;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::insert([
            // Facilities
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::whereId(1)->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002524',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Processador',
                        'description' => 'i5 8th Gen'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Memória Ram',
                        'description' => '12GB'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'HDD',
                        'description' => '1TB'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'SSD',
                        'description' => '240GB'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => 'fcfv9x2'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '33403982582'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002798',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Processador',
                        'description' => 'i5 8th Gen'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Memória Ram',
                        'description' => '12GB'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'HDD',
                        'description' => '1TB'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'SSD',
                        'description' => '240GB'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => 'b9kjsy2'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '24523317578'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 7400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '003265',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => 'hl3ld33'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '38281124991'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002517',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => '8g2rfv2'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '18386357006'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001903',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => '40v8md2'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '8759599670'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002423',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => 'dlltfp2'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '29604605366'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002754',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => '3d1fsy2'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '7318824266'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'vostro 200')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001497',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => 'dhhn4h1'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '29355727717'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'vostro 200')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001567',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => '7fnpph1'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '16184299573'
                    ],
                ])
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '003259',
                'serial_number' => null,
                'specifications' => json_encode([
                    [
                        'id' => Str::random(20),
                        'specification' => 'Service TAG',
                        'description' => 'jkjl813'
                    ],

                    [
                        'id' => Str::random(20),
                        'specification' => 'Express TAG',
                        'description' => '42601090791'
                    ],
                ])
            ],

            // Diretoria
            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001860',
                'serial_number' => 'c1mnpsk4dty3',
                'specifications' => null
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'imac')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001862',
                'serial_number' => 'c02n801zfy0t',
                'specifications' => null
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '003260',
                'serial_number' => 'c02n801zfy0t',
                'specifications' => null
            ],

        ]);
    }
}
