<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('city_id');
            $table->string('name');
            $table->integer('timezone');
            $table->string('cod');
            $table->timestamps();
        });

        Schema::create('coords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('city_id');
            $table->double('lon');
            $table->double('lat');
            $table->timestamps();

            $table->foreign('city_id')->on('cities')->references('id');
        });

        Schema::create('weathers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('city_id');
            $table->integer('weather_id');
            $table->string('main');
            $table->string('description')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();

            $table->foreign('city_id')->on('cities')->references('id');
        });

        Schema::create('main', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('city_id');
            $table->double('temp');
            $table->double('feels_like');
            $table->double('temp_min')->default(0);
            $table->double('temp_max')->default(0);
            $table->double('pressure')->default(0);
            $table->double('humidity')->default(0);
            $table->double('sea_level')->default(0);
            $table->double('grnd_level')->default(0);
            $table->timestamps();

            $table->foreign('city_id')->on('cities')->references('id');
        });

        Schema::create('winds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('city_id');
            $table->double('speed');
            $table->integer('deg');
            $table->timestamps();

            $table->foreign('city_id')->on('cities')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather_app');
    }
}
