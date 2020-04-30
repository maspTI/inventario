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

        ]);
    }
}
