<?php

use App\Licence;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LicencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Licence::insert([
            // yearly
            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'SophiA',
                'description' => null,
                'renewal_term' => 'yearly',
                'value' => 14040.66,
                'bought_at' => '2020-03-25',
                'due_date' => '2021-03-25',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'inArte e inWeb',
                'description' => null,
                'renewal_term' => 'yearly',
                'value' => 9750.00,
                'bought_at' => '2020-02-12',
                'due_date' => '2021-02-12',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Grammarly',
                'description' => 'São 4 licenças',
                'renewal_term' => 'yearly',
                'value' => 2880.00,
                'bought_at' => '2019-05-20',
                'due_date' => '2020-05-20',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Articheck',
                'description' => 'Podemos fazer um downgrade ou negociarmos com o fornecedor',
                'renewal_term' => 'yearly',
                'value' => 16920.00,
                'bought_at' => '2019-09-26',
                'due_date' => '2020-09-26',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'eClimateNotebook',
                'description' => 'São 20 usuários no tipo de licenciamento adiquirido',
                'renewal_term' => 'yearly',
                'value' => 3600.00,
                'bought_at' => '2020-04-21',
                'due_date' => '2021-04-21',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Adobe',
                'description' => 'Foram adiquiridas 25 licenças no valor ~R$ 1950',
                'renewal_term' => 'yearly',
                'value' => 48589.00,
                'bought_at' => '2020-03-30',
                'due_date' => '2021-03-30',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Autodesk',
                'description' => 'Contrato número #110002988428',
                'renewal_term' => 'yearly',
                'value' => 2131.20,
                'bought_at' => '2020-02-20',
                'due_date' => '2021-02-20',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Autodesk',
                'description' => 'Contrato número #110002971151',
                'renewal_term' => 'yearly',
                'value' => 2131.20,
                'bought_at' => '2020-02-05',
                'due_date' => '2021-02-05',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Autodesk',
                'description' => 'Contrato número #110001590529',
                'renewal_term' => 'yearly',
                'value' => 2131.20,
                'bought_at' => '2020-03-13',
                'due_date' => '2021-03-13',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Autodesk',
                'description' => 'Contrato número #110002495654, contrato possui 2 licenças',
                'renewal_term' => 'yearly',
                'value' => 4262.40,
                'bought_at' => '2020-02-13',
                'due_date' => '2021-02-13',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'GSuite',
                'description' => 'Valor relativo ao número de licenças(gmail, etc) contratadas. Cada por R$45,90',
                'renewal_term' => 'yearly',
                'value' => 7700.00,
                'bought_at' => '2019-09-22',
                'due_date' => '2020-09-22',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'GSuite',
                'description' => 'Renovação do backup em cloud',
                'renewal_term' => 'yearly',
                'value' => 2300.00,
                'bought_at' => '2019-06-22',
                'due_date' => '2020-06-22',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Sketchup',
                'description' => '2 licenças para renovar, Juliana Ziebel e Izabela Malzone',
                'renewal_term' => 'yearly',
                'value' => 1400.00,
                'bought_at' => '2020-02-27',
                'due_date' => '2021-02-27',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Sketchup',
                'description' => '1 licença para renovar, seria da Giulia',
                'renewal_term' => 'yearly',
                'value' => 700.00,
                'bought_at' => '2020-02-15',
                'due_date' => '2021-02-15',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            // monthly
            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Protheus',
                'description' => null,
                'renewal_term' => 'monthly',
                'value' => 23651.99,
                'bought_at' => '2021-01-01',
                'due_date' => '2021-06-01',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'Gsuite',
                'description' => null,
                'renewal_term' => 'monthly',
                'value' => 8996.40,
                'bought_at' => '2021-01-01',
                'due_date' => '2021-06-01',
                'status' => Carbon::now(),
                'notes' => '',
            ],

            [
                'department_id' => 8,
                'subdepartment_id' => 7,
                'name' => 'SiTef',
                'description' => null,
                'renewal_term' => 'monthly',
                'value' => 308.00,
                'bought_at' => '2021-01-01',
                'due_date' => '2021-06-01',
                'status' => Carbon::now(),
                'notes' => '',
            ],

        ]);
    }
}
