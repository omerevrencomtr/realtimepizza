<?php

use App\Status;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Status::create([
            'name' => 'Sipariş alındı',
            'percent' => 10,
        ]);

        Status::create([
            'name' => 'Hazırlanıyor',
            'percent' => 30,
        ]);

        Status::create([
            'name' => 'Fırında',
            'percent' => 50,
        ]);

        Status::create([
            'name' => 'Kalite kontrolü yapılıyor',
            'percent' => 70,
        ]);

        Status::create([
            'name' => 'Dağıtımda',
            'percent' => 100,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
