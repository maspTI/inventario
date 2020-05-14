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

            // Facilities
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Gabriel Fonseca')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Vitor Machado Fernandes')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Valdir Ferreira')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 7400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Marcelo Santos')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Juliana Prado')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Wilson Marcelino')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Keila Clei Ribeiro da Silva')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Fabio Frayha')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Fabio Frayha')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Adriano Pedrosa')->first()->id,
                'pattern_id' => Pattern::where('name', 'imac')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Alexsandro Silva')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Alailson Melo')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Camila Gomes')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Caique Fernandes')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Karina Del Papa')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Vinicius Flauaus')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Elis Fabro')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Larissa Miranda Silva')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Aline Lima')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Renata Toledo')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Paulo Silva')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Katia Valeria Gomes Ferreira')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Marina Sgnotto')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Cassiani Santos Aguiar')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Paulo Cesar Mafra de Matos')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Tania Souza')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Fabiana Soares')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Ana Paula Moreira')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Mary Matsumura')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Gabriel Brejeiro')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Maria Lucia de Oliveira Souza')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Marta Nunes')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Francisco Rodrigues de Sousa')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Reinaldo Menezes')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Sofia Hennen')->first()->id,
                'pattern_id' => Pattern::where('name', 'inspiron 7560')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Erick Santos')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Aline Assumpção')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Cecilia Winter')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Nalu Maria')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Paula Coelho Magalhães de Lima')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Felipe Lucena')->first()->id,
                'holder_id' => User::where('name', 'Felipe Lucena')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Bianca Saijo')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Tomás Toledo')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook air')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Isabella Rjeille Cordeiro')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook air')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Fernando Oliva')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Laura Consendey')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Guilherme Perez Giufrida')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Olivia Cecilia Manuel Ardui')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Gabriela Gotoda')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Matheus Araujo Andrade Costa')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Ana Carolina Pais Pellegrini')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Mayara Santos')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Leonardo Antiqueira')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Mariana Trevas')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
                'holder_id' => User::where('name', 'Bruno Gomes Rodrigues')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
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
            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Paula Tinoco')->first()->id,
                'pattern_id' => Pattern::where('name', 'imac')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001799',
                'serial_number' => 'c02k62kwdnct',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Clau Lima')->first()->id,
                'pattern_id' => Pattern::where('name', 'imac')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002457',
                'serial_number' => null,
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Barbara Catta Preta Lima')->first()->id,
                'pattern_id' => Pattern::where('name', 'imac')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001863',
                'serial_number' => 'c02n801qfy0t',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Guilherme Pacola')->first()->id,
                'pattern_id' => Pattern::where('name', 'imac')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002025',
                'serial_number' => 'c02p92j9fy0t',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Mediacao
            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'André Mesquita')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002099',
                'serial_number' => 'c1mpm11ydty3',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'apple')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Amanda Carneiro')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001859',
                'serial_number' => 'c1mnpssedty3',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Horrana Santos')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002133',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'f1xm172'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '32768656526'
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
                'holder_id' => User::where('name', 'Stela Martins')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002454',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5T0VFP2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '12638897462'
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
                'holder_id' => User::where('name', 'Yasmine Lima')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002127',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5gqhc72'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '11895849470'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observações',
                            'description' => 'problemas com a tela'
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
                'holder_id' => User::where('name', 'Waldiael Genival Braz da Silva')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002452',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5T1SFP2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '12640437110'
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
                'holder_id' => User::where('name', 'Julia Cavazzini')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002422',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'DLKXFP2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29603112374'
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
                'holder_id' => User::where('name', 'Eric Augusto Xavier da Silva')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002439',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'DFKZRP2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29240424182'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Comunicacao
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Daniela Cotrim')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002520',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '8FMVFV2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '18359669774'
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
                'holder_id' => User::where('name', 'Rodrigo Vilano Avelar')->first()->id,
                'pattern_id' => Pattern::where('name', 'inspiron 7472')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002434',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'GPWSWQ2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '36395268266'
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
                'holder_id' => User::where('name', 'Fernando Netto')->first()->id,
                'pattern_id' => Pattern::where('name', 'inspiron 7472')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002126',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5GNQC72'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '11891230526'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'confirmar modelo do equipamento.'
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
                'holder_id' => User::where('name', 'Mariana Marques')->first()->id,
                'pattern_id' => Pattern::where('name', 'inspiron 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001902',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'H996CD2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '37564907798'
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
                'holder_id' => User::where('name', 'Gabriela Valdanha de Araujo')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002098',
                'serial_number' => 'c1mp41jgdty3',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 'xps')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002279',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '7DBT2J2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '16043368718'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'comunicação'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Producao
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Marina de Moura Almeida')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002312',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'J95HJ82'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '41912276114'
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
                'holder_id' => User::where('name', 'Marina Reboucas Martins')->first()->id,
                'pattern_id' => Pattern::where('name', 'inspiron 7472')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002463',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '4XKQ9R2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '10737331166'
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
                'holder_id' => User::where('name', 'Amanda Goes Negri')->first()->id,
                'pattern_id' => Pattern::where('name', 'vostro 5481')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002786',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '8DM9K03'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '18237716355'
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
                'holder_id' => User::where('name', 'Jacqueline da Costa Reis')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002017',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '2JDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '5525007554'
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
                'holder_id' => User::where('name', 'Fernando Gallo')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002004',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'JGDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '42348908738'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'problemas com bateria'
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
                'holder_id' => User::where('name', 'Maicon William')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002012',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9FDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20520619202'
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
                'holder_id' => User::where('name', 'Leonardo Rodrigues Mendes de Souza')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002125',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '5GQMC72'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '11896082750'
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
                'holder_id' => User::where('name', 'Steffania Prata')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002299',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '4KTJSL2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9966085238'
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
                'holder_id' => User::where('name', 'Adriana Rodrigues')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002194',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HWS9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20674032158'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'confirmar modelo.'
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
                'holder_id' => User::where('name', 'Izabela Malzone')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002191',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HXV9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20675851742'
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
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002196',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HXX2B'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20675945054'
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
                'pattern_id' => Pattern::where('name', 'inspiron 7460')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002321',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '46393N2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9075389870'
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
                'holder_id' => User::where('name', 'Juliana Ziebell')->first()->id,
                'pattern_id' => Pattern::where('name', 'macbook pro')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '003152',
                'serial_number' => 'c02k93smd6n',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // RI
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Carolina Rossetti')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002392',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'H4V2QK2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '37299360242'
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
                'holder_id' => User::where('name', 'Jussara Nascimento')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3400')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002789',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'DRPJSY2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '29973671498'
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
                'holder_id' => User::where('name', 'Lais Almeida Santos')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002516',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '8G4WFV2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '18389949518'
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
                'holder_id' => User::where('name', 'Brenda Koschel')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002327',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '4JVB3N2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9908572718'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Planejamento Estrategico
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'FERNANDA FERRAZ BONINI')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002501',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'GTYR5V2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '36640410734'
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
                'holder_id' => User::where('name', 'Giovanna Gray')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002197',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HXY9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20675991710'
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
                'holder_id' => User::where('name', 'ISABELLA SOUZA GAMA')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002297',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'FWGCSL2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '34614123446'
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
                'holder_id' => User::where('name', 'Gabriel Di Pietro de Camillo')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002797',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'BB4KSY2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '24617422730'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Juridico
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Joao Lopes')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002750',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'FCKZ9X2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '33412567286'
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
                'holder_id' => User::where('name', 'Fernando Namur')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002200',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HVY9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20672632478'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Engenharia
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Miriam Elwing')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002192',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HVT9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20672399198'
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
                'holder_id' => User::where('name', 'Leonardo Henrique de Andrade')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3470')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002310',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'J99Z542'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '41919816098'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Secretariado
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Paula Zoppello')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3480')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002328',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '4JW53N2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9909972398'
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
                'holder_id' => User::where('name', 'Debora Ferreira')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002020',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '8HDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '18464769218'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Centro Pesquisa
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Adriana Villela')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3490')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002475',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'D1FHYR2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '28384668974'
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
                'holder_id' => User::where('name', 'Nayara Oliveira')->first()->id,
                'pattern_id' => Pattern::where('name', 'xps')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002028',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'F9QZ442'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '33241238930'
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
                'holder_id' => User::where('name', 'Nayara Oliveira')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude e5440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002122',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'G2VGKZ1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '35002291501'
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
                'holder_id' => User::where('name', 'Bruno Cezar Mesquita Esteves')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3450')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002195',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '9HWZ9B2'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20674358750'
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
                'holder_id' => User::where('name', 'Beatriz Yoshito')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002018',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'HFDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '37934877890'
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
                'holder_id' => User::where('name', 'Beatriz Yoshito')->first()->id,
                'pattern_id' => Pattern::where('name', 'imac')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002494',
                'serial_number' => 'c02xv5a5j1gg',
                'specifications' => null,
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Carla Bonomi')->first()->id,
                'pattern_id' => Pattern::where('name', 'optplex 7010')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002118',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'JYHFKZ1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '43443994861'
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
                'holder_id' => User::where('name', 'Carla Bonomi')->first()->id,
                'pattern_id' => Pattern::where('name', 'latitude 3440')->first()->id,
                'category_id' => Category::where('name', 'notebook')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002002',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '1JDG342'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '3348225218'
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
                'holder_id' => User::where('name', 'Carolina Silva')->first()->id,
                'pattern_id' => Pattern::where('name', 'vostro 220s')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001615',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '12PXLL1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '2341272709'
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
                'holder_id' => User::where('name', 'Mirna Felix')->first()->id,
                'pattern_id' => Pattern::where('name', 'vostro 220s')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001628',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '40DNLRH1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '95322836181'
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
                'pattern_id' => Pattern::where('name', 'xps')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002029',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '49QZ442'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '9296633234'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'arquivo fotográfico'
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
                'pattern_id' => Pattern::where('name', 'optplex 3020')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001822',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '6NT7Y02'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '14500495586'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'arquivo fotográfico'
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
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001516',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'GWLPPH1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '36799906357'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'pesquisador'
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
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001506',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'BS8YHH1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '25652704501'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'pesquisador'
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
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001689',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '2XRY9R1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '6395897053'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'cpd'
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
                'pattern_id' => Pattern::where('name', 'optplex 7010')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002119',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => 'BYHFKZ1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '26029736173'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'estagiário'
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
                'pattern_id' => Pattern::where('name', 'optplex 9020')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '002027',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '2QM1542'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '5962690082'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'estagiário'
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
                'pattern_id' => Pattern::where('name', 'vostro 220s')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001618',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '22PXLL1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '4518055045'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'estagiário'
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
                'pattern_id' => Pattern::where('name', 'optplex 3010')->first()->id,
                'category_id' => Category::where('name', 'desktop')->first()->id,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001796',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '975X6W1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '20024250913'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'voluntários'
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
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => '001718',
                'serial_number' => null,
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'Service TAG',
                            'description' => '25FC8S1'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'Express TAG',
                            'description' => '4681661041'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'localização',
                            'description' => 'centro de pesquisa'
                        ],

                        [
                            'id' => Str::random(20),
                            'specification' => 'observação',
                            'description' => 'voluntários'
                        ],
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // TI
            [
                'brand_id' => Brand::where('name', 'dell')->first()->id,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => Pattern::where('name', 't420')->first()->id,
                'category_id' => Category::where('name', 'servidor')->first()->id,
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
                'department_id' => 7,
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
        ]);
    }
}
