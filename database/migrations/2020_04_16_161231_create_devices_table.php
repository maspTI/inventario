<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('holder_id')->nullable();
            $table->unsignedBigInteger('pattern_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('department_id');
            $table->string('ticket_number')->nullable();
            $table->date('bought_at')->nullable();
            $table->string('property_tag')->unique();
            $table->string('serial_number')->nullable();
            $table->json('specifications')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->foreign('holder_id')->references('id')->on('admin.users');
            $table->foreign('pattern_id')->references('id')->on('patterns');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('department_id')->references('id')->on('admin.departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
