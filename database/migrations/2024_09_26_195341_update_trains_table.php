<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('Corporation', 'company');
            $table->string('departure_station', 30)->nullable(false);
            $table->string('arrival_station', 30)->nullable(false);
            $table->dateTime('departure_time')->nullable();
            $table->dateTime('arrival_time')->nullable();
            $table->bigInteger('train_code')->nullable(false);
            $table->integer('number_of_carriages')->nullable();
            $table->boolean('on_time')->default(1);
            $table->boolean('deleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumnr('train_code');
            $table->dropColumn('number_of_carriages');
            $table->dropColumn('on_time');
            $table->dropColumn('deleted');
        });
    }
};
