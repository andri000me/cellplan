<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilikMenarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik_menara', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ptm_nama', 100)->nullable();
            $table->string('ptm_pic_nama', 50)->nullable();
            $table->string('ptm_pic_ktp', 20)->nullable();
            $table->string('ptm_almt', 200)->nullable();
            $table->string('ptm_hp', 20)->nullable();
            $table->string('ptm_email', 150)->nullable();
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
        Schema::dropIfExists('pemilik_menara');
    }
}
