<?php

use App\User;
use App\Brand;
use App\Device;
use App\Pattern;
use App\Category;
use Carbon\Carbon;
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
            // TI
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 't420')->first()->id,
                'category_id' => Category::where('name', 'servidor')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001832',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '8ctby02'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '18189118946'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 't430')->first()->id,
                'category_id' => Category::where('name', 'servidor')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002211',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'g9lq172'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '35409199502'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 't300')->first()->id,
                'category_id' => Category::where('name', 'servidor')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001534',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '1wppph1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '4154889781'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 't320')->first()->id,
                'category_id' => Category::where('name', 'servidor')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002123',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '222hkz1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '4478676589'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'nx430')->first()->id,
                'category_id' => Category::where('name', 'servidor')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002447',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '6zzsmn2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '15237132446'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'storage de imagens'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'inspiron 530')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '000047',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '2m921g1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '5699032273'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'inspiron 530')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001847',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '6vtbbj1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '14984376013'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'antigo servidor pfsense'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'optplex 390')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001690',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '3xry9r1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '8572679389'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'antigo servidor masp wifi'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'optplex 7050')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002357',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '6prq0l2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '14618911862'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'optplex 990')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002222',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'dn2c0r1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29692812493'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'optplex 990')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002220',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '4czyms1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9493125841'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'inspiron 7560')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002295',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'gw2jsl2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '36767717750'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

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
                'specifications' => strtolower(
                    json_encode([
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
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Vitor Machado,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002798',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
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
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Valdir Ferreira,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 7400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '003265',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
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
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Marcelo Santos,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002517',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
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
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Juliana Prado,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001903',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
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
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Wilson Marcelino,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002423',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
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
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Keila Klei,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002754',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
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
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'specifications' => strtolower(
                    json_encode([
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

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'marcenaria'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'specifications' => strtolower(
                    json_encode([
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

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'ar condicionado'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Diretoria
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Fabio Frayha,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '003259',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
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

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'reserva'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Fabio Frayha,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001860',
                'serial_number' => 'c1mnpsk4dty3',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Adriano Pedrosa,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'imac')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001862',
                'serial_number' => 'c02n801zfy0t',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Loja
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Alexsandro Silva,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002525',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'fcyz9x2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '33436081910'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Alailson Melo,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001901',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'm937cd2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '37554876758'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Camila Gomes,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002007',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '3gdg342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '7520391362'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Caique Fernandes,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002135',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'f1xn172'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '32768703182'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'problema com a bateria'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'inspiron 3268')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002362',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '69pm0l2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '13647907190'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'loja 1 subsolo'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'inspiron 3268')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002361',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '69mv0l2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '13643288246'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'loja 1 subsolo'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'optplex 790')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002227',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'dn1c0r1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29691132877'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'loja 1 andar'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Operacoes-Eventos
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Karina Del Papa,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002440',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'dgytrp2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29324125046'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => vinicius flauaus,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002458',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '831lvn2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '17598357614'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => elis fabro,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002202',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9hxbbb2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20674921214'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => larissa miranda,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002465',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5xxx9r2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '12936275102'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'property_tag' => '002346',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '8z5dqm2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '19539613946'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'orientadores'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Aline Lima,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002013',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '1hdg342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '3227292866'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // RH
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Renata Toledo,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002749',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5bdjqx2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '11571795974'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Paulo Silva,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002451',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5t0xfp2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '12638990774'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => KATIA GOMES,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002311',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'J97D542'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '41915430434'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'optplex 390')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001723',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '25F89S1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '4681475713'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'recursos humanos'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Financeiro - contabilidade
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => MARINA SGNOTTO,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002502',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'GV1R5V2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '36705915758'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => CASSIANI AGUIAR,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002009',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'JDDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '4216750210'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => PAULO MAFRA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002006',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '3HDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '7580857538'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => TANIA SOUZA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002010',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'DHDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29348680898'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => FABIANA SOARES,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002198',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HWY9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20674312094'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => ANA PAULA MOREIRA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002790',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'DRQHSY2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29975257802'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Financeiro
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => MARY MATSUMURA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002788',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'DRLHSY2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29966859722'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => GABRIEL BREJEIRO,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002008',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '7GDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '16227520706'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => MARIA LÚCIA DE OLIVEIRA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002021',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'FHDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '33702245570'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => MARTA NUNES,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002203',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HXT9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20675758430'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => FRANCISCO RODRIGUES,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002005',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5JDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '12055354562'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => REINALDO MENEZES,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002014',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'GGDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '35818561730'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Conservação e Restauro
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => SOFIA HENNEN,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'inspiron 7560')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002294',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'GW2KSL2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '36767764406'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => ERICK SANTOS,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002518',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '8FHRFV2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '18351085070'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => ALINE ASSUMPÇÃO,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002396',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '99XPCK2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20191846610'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'mac server')->first()->id,
                'category_id' => Category::where('name', 'servidor')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001750',
                'serial_number' => 'h003541deuf',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'restauro'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Acervo
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => CECÍLIA WINTER,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002519',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '8GJSFV2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '18414957134'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => NALU MARIA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002751',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '3B9HSY2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '7211422154'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => PAULA COELHO,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002322',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '4JW93N2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9910159022'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => FELIPE LUCENA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002397',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '99XQCK2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20191893266'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => BIANCA SAIJO,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002424',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'DLLQFP2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29604465398'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'optplex 390')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001721',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '25F49S1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '4681289089'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'acervo'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Curadoria
            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                // 'holder_id' => Tomas Toledo,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'macbook air')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002358',
                'serial_number' => 'c02tq1b3j1wl',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                // 'holder_id' => ISABELLA RJEILLE,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'macbook air')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002278',
                'serial_number' => 'c02t401kh3qf',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                // 'holder_id' => FERNANDO OLIVA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001896',
                'serial_number' => 'c1mntjs4dty3',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                // 'holder_id' => LAURA CONSENDEY,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001864',
                'serial_number' => 'c1mnp02tdty3',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                // 'holder_id' => GUILHERME GIUFRUDA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001897',
                'serial_number' => 'c1mntjujdtx3',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                // 'holder_id' => OLIVIA ARDUI,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001861',
                'serial_number' => 'c1mnpsskdty3',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => GABRIELA GOTODA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002453',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5T1QFP2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '12640343798'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => MATHEUS COSTA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001894',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'BQ0CM22'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '25517314730'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => ANA PELLEGRINI,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002015',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '4JDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9878572226'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => MAYARA SANTOS,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002201',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HXS9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20675711774'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => LEONARDO ANTIQUEIRA,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002019',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'DFDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29227748546'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Editorial
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => MARIANA TREVAS,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002380',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '4KSKSL2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9964452278'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                // 'holder_id' => BRUNO GOMES,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 8,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002193',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HWV9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20674172126'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Design

            // PAULA TINOCO    001799  DESKTOP APPLE   IMAC 25"    -   -   C02K62KWDNCT
            // CLAU LIMA   002457  DESKTOP APPLE   IMAC 25"    -   -   -
            // BARBARA CATTA   001863  DESKTOP APPLE   IMAC 25"    -   -   C02N801QFY0T
            // GUILHERME PACOLA    002025  DESKTOP APPLE   IMAC 25"    -   -   C02P92J9FY0T

            // ANDRÉ MESQUITA  002099  NOTEBOOK    APPLE   MAC PRO -   -   C1MPM11YDTY3
            // HORRANA SANTOS  002133  NOTEBOOK    DELL    LATITUDE 3450   F1XM172 32768656526 -
            // AMANDA CARNEIRO 001859  NOTEBOOK    APPLE   MAC PRO -   -   C1MNPSSEDTY3
            // STELA MARTINS   002454  NOTEBOOK    DELL    LATITUDE 3480   5T0VFP2 12638897462 -
            // YASMINE LIMA    002127  NOTEBOOK    DELL    LATITUDE 3450   5GQHC72 11895849470 -       Problemas com a tela
            // WALDIAEL BRAZ   002452  NOTEBOOK    DELL    LATITUDE 3480   5T1SFP2 12640437110 -
            // JULIA CAVAZZINI 002422  NOTEBOOK    DELL    LATITUDE 3480   DLKXFP2 29603112374 -
            // ERIC XAVIER 002439  NOTEBOOK    DELL    LATITUDE 3480   DFKZRP2 29240424182 -

            // DANIELA COTRIM  002520  NOTEBOOK    DELL    LATITUDE 3490   8FMVFV2 18359669774 -
            // RODRIGO AVELAR  002434  NOTEBOOK    DELL    INSPIRON 7472   GPWSWQ2 36395268266 -
            // FERNANDO NETTO  002126  NOTEBOOK    DELL        5GNQC72 11891230526
            // GABRIELA VALDANHA   002098  NOTEBOOK    APPLE   MAC PRO -   -   C1MP41JGDTY3
            // MARIANA MARQUES 001902  NOTEBOOK    DELL    LATITUDE 3470   H996CD2 37564907798 -
            // COMUNICAÇÃO 002279  DESKTOP DELL    XPS 7DBT2J2 16043368718 -

            // MARINA MOURA    002312  NOTEBOOK    DELL    LATITUDE 3470   J95HJ82 41912276114 -
            // MARINA REBOUÇAS 002463  NOTEBOOK    DELL    INSPIRON 7472   4XKQ9R2 10737331166 -
            // AMANDA NEGRI    002786  NOTEBOOK    DELL    VOSTRO 5481 8DM9K03 18237716355 -
            // JACQUELINE REIS 002017  NOTEBOOK    DELL    LATITUDE 3440   2JDG342 5525007554  -
            // FERNANDO GALLO  002004  NOTEBOOK    DELL    LATITUDE 3440   JGDG342 42348908738 -       Problemas com bateria
            // MAICON WILLIAM FERREIRA 002012  NOTEBOOK    DELL    LATITUDE 3440   9FDG342 20520619202 -
            // LEONARDO RODRIGUES  002125  NOTEBOOK    DELL    LATITUDE 3450   5GQMC72 11896082750 -
            // STEFFÂNIA PRATA 002299  NOTEBOOK    DELL    LATITUDE 3480   4KTJSL2 9966085238  -
            // ADRIANA RODRIGUES   002194  NOTEBOOK    DELL        9HWS9B2 20674032158 -
            // ISABELLA MALZONE    002191  NOTEBOOK    DELL    LATITUDE 3450   9HXV9B2 20675851742 -
            // GIULIA PERONDI  002196  NOTEBOOK    DELL    LATITUDE 3450   9HXX2B  20675945054 -
            // MARIANE DALL'AGNOL  002321  NOTEBOOK    DELL    INSPIRON 7460   46393N2 9075389870  -
            // JULIANA ZIEBELL 003152  NOTEBOOK    APPLE   MAC PRO         C02K93SMD6N

            // CAROLINA ROSSETTI   002392  NOTEBOOK    DELL    LATITUDE 3480   H4V2QK2 37299360242 -
            // JUSSARA NASCIMENTO  002789  NOTEBOOK    DELL    LATITUDE 3400   DRPJSY2 29973671498 -
            // LAIS ALMEIDA    002516  NOTEBOOK    DELL    LATITUDE 3490   8G4WFV2 18389949518 -
            // BRENDA KOSCHEL  002327  NOTEBOOK    DELL    LATITUDE 3480   4JVB3N2 9908572718  -

            // FERNANDA BONINI 002501  NOTEBOOK    DELL    LATITUDE 3490   GTYR5V2 36640410734 -
            // GIOVANNA GREY   002197  NOTEBOOK    DELL    LATITUDE 3450   9HXY9B2 20675991710 -
            // ISABELA GAMA    002297  NOTEBOOK    DELL    LATITUDE 3480   FWGCSL2 34614123446 -
            // GABRIEL CAMILO  002797  NOTEBOOK    DELL    LATITUDE 3490   BB4KSY2 24617422730 -

            // JOÃO LOPES  002750  NOTEBOOK    DELL    LATITUDE 3490   FCKZ9X2 33412567286 -
            // FERNANDO NAMUR  002200  NOTEBOOK    DELL    LATITUDE 3450   9HVY9B2 20672632478 -

            // MIRIAM ELWING   002192  NOTEBOOK    DELL    LATITUDE 3450   9HVT9B2 20672399198 -
            // LEONARDO HENRIQUE ANDRADE   002310  NOTEBOOK    DELL    LATITUDE 3470   J99Z542 41919816098 -

            // PAULA ZOPELLO   002328  NOTEBOOK    DELL    LATITUDE 3480   4JW53N2 9909972398  -
            // DEBORA FERREIRA 002020  NOTEBOOK    DELL    LATITUDE 3440   8HDG342 18464769218 -

            // ADRIANE VILLELA 002475  NOTEBOOK    DELL    LATITUDE 3490   D1FHYR2 28384668974 -
            // NAYARA OLIVEIRA 002028  DESKTOP DELL    XPS F9QZ442 33241238930 -
            // NAYARA OLIVEIRA 002122  NOTEBOOK    DELL    LATITUDE E5440  G2VGKZ1 35002291501 -
            // BRUNO CESAR MESQUITA    002195  NOTEBOOK    DELL    LATITUDE 3450   9HWZ9B2 20674358750 -
            // BEATRIZ YOSHITO 002018  NOTEBOOK    DELL    LATITUDE 3440   HFDG342 37934877890 -
            // BEATRIZ YOSHITO 002494  DESKTOP APPLE   IMAC "27    -   -   C02XV5A5J1GG
            // CARLA BONOMI    002118  DESKTOP DELL    OPTPLEX 7010    JYHFKZ1 43443994861 -
            // CARLA BONOMI    002002  NOTEBOOK    DELL    LATITUDE 3440   1JDG342 3348225218  -
            // ARQUIVO FOTOGRÁFICO 002029  DESKTOP DELL    XPS 49QZ442 9296633234  -
            //     001822  DESKTOP DELL    OPTPLEX 3020    6NT7Y02 14500495586 -
            // PESQUISADOR 001516  DESKTOP DELL    VOSTRO 200  GWLPPH1 36799906357 -
            //     001506  DESKTOP DELL    VOSTRO 200  BS8YHH1 25652704501 -
            // CPD 001689  DESKTOP DELL    OPTPLEX 390 2XRY9R1 6395897053  -
            // CAROLINA SILVA  001615  DESKTOP DELL    VOSTRO 220s 12PXLL1 2341272709  -
            // MIRNA FELIX 001628  DESKTOP DELL    VOSTRO 220s 40DNLRH1    95322836181 -
            // ESTAGIARIO  002119  DESKTOP DELL    OPTPLEX 7010    BYHFKZ1 26029736173
            //     002027  DESKTOP DELL    OPTPLEX 9020    2QM1542 5962690082
            //     001618  DESKTOP DELL    VOSTRO 220s 22PXLL1 4518055045
            // VOLUNTÁRIOS 001796  DESKTOP DELL    OPTPLEX 3010    975X6W1 20024250913
            //     001718  DESKTOP DELL    OPTPLEX 390 25FC8S1 4681661041  -

        ]);
    }
}
