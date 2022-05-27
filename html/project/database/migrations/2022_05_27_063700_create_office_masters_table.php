<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_masters', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);										
            $table->string('office_id')->index();										
            $table->string('name');										
            $table->string('post_code');										
            $table->string('address1');										
            $table->string('address2');										
            $table->string('insurance_symbol');										
            $table->string('manager');										
            $table->string('belong');										
            $table->string('telephone');										
            $table->string('mail');										

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_masters');
    }
}
