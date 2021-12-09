<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create(["name" => "Ganaderia"]);
        Activity::create(["name" => "Software"]);
        Activity::create(["name" => "Mineria"]);
        Activity::create(["name" => "Pesca"]);
        Activity::create(["name" => "Bienes raices"]);
        Activity::create(["name" => "Construccion"]);
        Activity::create(["name" => "Transporte aereo"]);
        Activity::create(["name" => "Turismo"]);
        Activity::create(["name" => "Telecomunicaciones"]);
        Activity::create(["name" => "Metalurgica"]);
        Activity::create(["name" => "Cinematografia"]);
        Activity::create(["name" => "Editorial"]);
        Activity::create(["name" => "Mercado mayorista"]);
        Activity::create(["name" => "Productos agricolas"]);
        Activity::create(["name" => "Empresas de diseño"]);
        Activity::create(["name" => "Electricidad"]);
        Activity::create(["name" => "Agua potable"]);
        Activity::create(["name" => "Cobranzas"]);
        Activity::create(["name" => "Vigilancia"]);
        Activity::create(["name" => "Derecho"]);
    }
}
