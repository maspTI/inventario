<?php

use App\User;
use App\Device;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CellPhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::insert([
            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Adriana Villela')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TTXV',
                'serial_number' => 'RQ8M803TTXV',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933750966',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4070',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591816',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591814',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Adriano Pedrosa')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KNCL',
                'serial_number' => 'RQ8M803KNCL',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933266438',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4000',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109520161',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109520169',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Alailson Melo')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TTRA',
                'serial_number' => 'RQ8M803TTRA',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11964869072',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3081',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591766',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591764',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Alexsandro Silva')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TLZT',
                'serial_number' => 'RQ8M803TLZT',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11963905373',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3080',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109589521',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109589529',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Aline Lima')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KTDF',
                'serial_number' => 'RQ8M803KTDF',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11973221180',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3054',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109521821',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109521829',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Amanda Carneiro')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T5BR',
                'serial_number' => 'RQ8M803T5BR',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11971267023',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4031',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109584365',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109584363',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Amanda Goes Negri')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KTPW',
                'serial_number' => 'RQ8M803KTPW',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11975802099',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4058',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109521920',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109521928',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Ana Paula Moreira')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803L73P',
                'serial_number' => 'RQ8M803L73P',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11957837837',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3070',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109526010',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109526018',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'André Mesquita')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KKGM',
                'serial_number' => 'RQ8M803KKGM',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11971194965',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4030',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109519213',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109519211',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'BARBARA CATTA PRETA LIMA')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8003T50W',
                'serial_number' => 'RQ8M8003T50W',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11954729479',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4023',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109584258',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109584256',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Beatriz Yoshito')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803RW6A',
                'serial_number' => 'RQ8M803RW6A',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11941223773',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4071',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109570455',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109570453',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Bianca Saijo')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8035PXL',
                'serial_number' => 'RQ8M8035PXL',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11975293706',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4056',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109447530',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109447538',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Brenda Koschel')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TRER',
                'serial_number' => 'RQ8M803TRER',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11973540524',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3055',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109590990',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109590998',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Bruno Cezar Mesquita Esteves')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803L62D',
                'serial_number' => 'RQ8M803L62D',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11933798740',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4072',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109525673',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109525671',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'BRUNO GOMES RODRIGUES')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TNAA',
                'serial_number' => 'RQ8M803TNAA',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11950342444',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4006',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109589968',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109589966',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Camila Gomes')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M802LS2D',
                'serial_number' => 'RQ8M802LS2D',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11996725783',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3082',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109405587',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109405585',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Carla Bonomi')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803706N',
                'serial_number' => 'RQ8M803706N',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933798902',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4073',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109461481',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109461489',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Carolina Rossetti')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M03KMDB',
                'serial_number' => 'RQ8M03KMDB',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11997379196',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3010',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109519841',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109519849',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Cecília Winter')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TG7Z',
                'serial_number' => 'RQ8M803TG7Z',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933750163',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4040',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109587954',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109587952',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Clau Lima')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8034M9R',
                'serial_number' => 'RQ8M8034M9R',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11996379727',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4022',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109435774',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109435772',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Daniela Cotrim')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8036MTL',
                'serial_number' => 'RQ8M8036MTL',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11942414162',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4080',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109457737',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109457735',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Elis Fabro')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TQWK',
                'serial_number' => 'RQ8M803TQWK',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11973143884',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3052',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109590818',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109590816',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Erick Santos')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803L6HA',
                'serial_number' => 'RQ8M803L6HA',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11943200996',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4048',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109525822',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109525820',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Fabiana Soares')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803SPED',
                'serial_number' => 'RQ8M803SPED',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11957856563',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3071',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109579449',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109579447',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Fabio Frayha')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TTVW',
                'serial_number' => 'RQ8M803TTVW',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933518406',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3000',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591790',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591798',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'FERNANDA FERRAZ BONINI')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8035N0J',
                'serial_number' => 'RQ8M8035N0J',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11997011381',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3020',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109446904',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109446902',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Fernando Oliva')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KQAJ',
                'serial_number' => 'RQ8M803KQAJ',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11950473048',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4003',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109520807',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109520805',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Fernando Netto')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TYKM',
                'serial_number' => 'RQ8M803TYKM',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11942885471',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4083',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109593028',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109593026',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Fernando Gallo')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T5XR',
                'serial_number' => 'RQ8M803T5XR',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11995535723',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4062',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109584555',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109584553',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'FERNANDO NAMUR')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KTKJ',
                'serial_number' => 'RQ8M803KTKJ',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11998823294',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3017',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109521888',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109521886',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Francisco Rodrigues de Sousa')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TS8V',
                'serial_number' => 'RQ8M803TS8V',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11956623702',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3066',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591261',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591269',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Gabriel Brejeiro')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KRGP',
                'serial_number' => 'RQ8M803KRGP',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11955526709',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3061',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109521193',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109521191',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Gabriel Di Pietro de Camillo')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M802CASV',
                'serial_number' => 'RQ8M802CASV',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11997932589',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3014',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109383420',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109383428',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Gabriel Fonseca')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T9QZ',
                'serial_number' => 'RQ8M803T9QZ',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11999967215',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3093',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109585818',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109585816',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'GABRIELA VALDANHA DE ARAUJO')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803RW4Y',
                'serial_number' => 'RQ8M803RW4Y',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11942850571',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4082',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109570430',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109570438',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Giovanna Gray')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8025C8P',
                'serial_number' => 'RQ8M8025C8P',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11997052311',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3021',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109330181',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109330189',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Guilherme Pacola')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M80371GZ',
                'serial_number' => 'RQ8M80371GZ',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933750969',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4071',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109461911',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109461919',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'GUILHERME PEREZ GIUFRIDA')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TNZW',
                'serial_number' => 'RQ8M803TNZW',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11953193022',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4011',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109590180',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109590188',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Horrana Santos')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TTAD',
                'serial_number' => 'RQ8M803TTAD',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11972023051',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4036',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591618',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591616',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'ISABELLA RJEILLE CORDEIRO')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQM803TCGY',
                'serial_number' => 'RQM803TCGY',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11944698176',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4002',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109586725',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109586723',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Izabela Malzone')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T6MP',
                'serial_number' => 'RQ8M803T6MP',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11974704024',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4051',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109584795',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109584793',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'João Lopes')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TSWL',
                'serial_number' => 'RQ8M803TSWL',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11998109230',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3015',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591477',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591475',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Juliana Peixoto')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803SPFV',
                'serial_number' => 'RQ8M803SPFV',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933750534',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4042',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109579456',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109579454',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Juliana Prado')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8035K0N',
                'serial_number' => 'RQ8M8035K0N',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11996075723',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3033',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109445914',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109445912',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Juliana Ziebell')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803SMLH',
                'serial_number' => 'RQ8M803SMLH',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933751903',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4072',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109578847',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109578845',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Jussara Nascimento')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KGEN',
                'serial_number' => 'RQ8M803KGEN',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11997651498',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3012',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109518207',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109518205',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Karina Del Papa')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TB5T',
                'serial_number' => 'RQ8M803TB5T',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11972752167',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3050',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109586287',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109586285',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Katia Valeria Gomes Ferreira')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M802LRFM',
                'serial_number' => 'RQ8M802LRFM',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11997238329',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3041',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109405389',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109405387',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Keila Clei Ribeiro da Silva')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T8EN',
                'serial_number' => 'RQ8M803T8EN',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11974179960',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3057',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109585388',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109585386',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'LAIS ALMEIDA SANTOS')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TRGH',
                'serial_number' => 'RQ8M803TRGH',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11997804066',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3013',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591014',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591012',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Larissa Miranda Silva')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TRMP',
                'serial_number' => 'RQ8M803TRMP',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11973567608',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3056',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591063',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591061',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Laura Cosendey')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T5QN',
                'serial_number' => 'RQ8M803T5QN',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11971365825',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4032',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109584498',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109584496',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Leonardo Henrique de Andrade')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KL0M',
                'serial_number' => 'RQ8M803KL0M',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11996056472',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3032',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109519387',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109519385',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Leonardo Rodrigues Mendes de Souza')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TB2X',
                'serial_number' => 'RQ8M803TB2X',
                'specifications' => strtolower(
                    json_encode([
                        [
                                'id' => Str::random(20),
                                'specification' => 'numero',
                                'description' => '11975233602',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4055',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109586253',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109586251',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Loja')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TJNV',
                'serial_number' => 'RQ8M803TJNV',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11941595265'
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4078',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109588762',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109588760',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Maicon William')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8035N4W',
                'serial_number' => 'RQ8M8035N4W',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11975911517',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4059',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109446946',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109446944',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Mariana Trevas')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TGVY',
                'serial_number' => 'RQ8M803TGVY',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11944916161',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4005',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109588168',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => 'NULL',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Mariana Marques')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TLYN',
                'serial_number' => 'RQ8M803TLYN',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11964966991',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4064',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109589513',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109589511',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Marina de Moura Almeida')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803L6JM',
                'serial_number' => 'RQ8M803L6JM',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11974629436',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4050',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109525830',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109525838',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Marina Sgnotto')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803L68E',
                'serial_number' => 'RQ8M803L68E',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11957762607',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3067',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109525731',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109525739',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Marta Nunes')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TTTP',
                'serial_number' => 'RQ8M803TTTP',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11955895447',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3063',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591782',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591780',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Mary Matsumura')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KT2M',
                'serial_number' => 'RQ8M803KT2M',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11955202775',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3060',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109521714',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109521712',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'MATHEUS ARAUJO ANDRADE COSTA')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M80371EK',
                'serial_number' => 'RQ8M80371EK',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11950843875',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4008',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109461895',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109461893',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Miriam Elwing')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8036NHK',
                'serial_number' => 'RQ8M8036NHK',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11995557898',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3030',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109457968',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109457966',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Nalu Maria')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TLFB',
                'serial_number' => 'RQ8M803TLFB',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933750923',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4046',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109589356',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109589354',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Nayara Oliveira')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KW9P',
                'serial_number' => 'RQ8M803KW9P',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11943344923',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4074',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109522449',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109522447',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'OLIVIA CECILIA MANUEL ARDUI')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TT1R',
                'serial_number' => 'RQ8M803TT1R',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11953073717',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4010',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591527',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591525',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Paula Coelho Magalhães de Lima')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TFHT',
                'serial_number' => 'RQ8M803TFHT',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933750922',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4045',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109587723',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109587721',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Paula Tinoco')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T6JJ',
                'serial_number' => 'RQ8M803T6JJ',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11953201932',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4020',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109584761',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109584769',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Paula Zoppello')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KMHZ',
                'serial_number' => 'RQ8M803KMHZ',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11998221663',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '2000',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109519882',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109519880',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Paulo Cesar Mafra de Matos')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803L72M',
                'serial_number' => 'RQ8M803L72M',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11957827635',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3068',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109526002',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109526000',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => User::where('name', 'Paulo Silva')->first()->id,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803KJQF',
                'serial_number' => 'RQ8M803KJQF',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11968588791',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3042',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109518967',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109518965',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803RYHV',
                'serial_number' => 'RQ8M803RYHV',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933750910',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4044',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109571222',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '327590109571220',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8036JVY',
                'serial_number' => 'RQ8M8036JVY',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11942660391',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4081',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109456754',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109456752',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M802LRTK',
                'serial_number' => 'RQ8M802LRTK',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11970876906',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3085',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109405504',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109405502',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M8036GCL',
                'serial_number' => 'RQ8M8036GCL',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11999760979',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3092',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109455939',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '000000000000000',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T7QP',
                'serial_number' => 'RQ8M803T7QP',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11950923821',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4009',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109585156',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109585154',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TYSN',
                'serial_number' => 'RQ8M803TYSN',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11996942940',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3053',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109593093',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109593091',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803T4XY',
                'serial_number' => 'RQ8M803T4XY',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11974315055',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '3055',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109584225',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109584223',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803RXFX',
                'serial_number' => 'RQ8M803RXFX',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11975065191',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4054',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109570877',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109570875',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TLWX',
                'serial_number' => 'RQ8M803TLWX',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11974333846',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '5555',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109589497',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109589495',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'brand_id' => 4,
                'seller_id' => null,
                'holder_id' => null,
                'pattern_id' => 61,
                'category_id' => 7,
                'department_id' => 7,
                'subdepartment_id' => 7,
                'ticket_number' => null,
                'bought_at' => null,
                'property_tag' => 'RQ8M803TV1B',
                'serial_number' => 'RQ8M803TV1B',
                'specifications' => strtolower(
                    json_encode([
                        [
                            'id' => Str::random(20),
                            'specification' => 'numero',
                            'description' => '11933750847',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'discagem_rapida',
                            'description' => '4043',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_1',
                            'description' => '357289109591857',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'imei_2',
                            'description' => '357290109591855',
                        ],
                        [
                            'id' => Str::random(20),
                            'specification' => 'observacao',
                            'description' => 'reserva',
                        ]
                    ])
                ),
                'status' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
