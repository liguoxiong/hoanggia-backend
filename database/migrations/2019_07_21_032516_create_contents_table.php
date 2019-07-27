<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('header_en');
            $table->string('header_vi');
            $table->string('feature_title_en');
            $table->string('feature_title_vi');
            $table->string('feature_description_en');
            $table->string('feature_description_vi');
            $table->string('service_description_en');
            $table->string('service_description_vi');
            $table->string('distributor_title_en');
            $table->string('distributor_title_vi');
            $table->string('distributor_description_en')->nullable();
            $table->string('distributor_description_vi')->nullable();
            $table->string('product_description_en')->nullable();
            $table->string('product_description_vi')->nullable();
            $table->string('clients_description_en')->nullable();
            $table->string('clients_description_vi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
