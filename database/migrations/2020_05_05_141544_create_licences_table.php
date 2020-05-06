<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('subdepartment_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('renewal_term')->nullable();
            $table->decimal('value', 10, 2);
            $table->date('bought_at');
            $table->date('due_date')->nullable();
            $table->json('notes')->nullable();
            $table->timestamp('status')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('department_id')->references('id')->on('admin.departments');
            $table->foreign('subdepartment_id')->references('id')->on('admin.subdepartments');
            $table->foreign('seller_id')->references('id')->on('sellers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licences');
    }
}
