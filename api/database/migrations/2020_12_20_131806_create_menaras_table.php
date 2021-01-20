<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menara_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mnrstat_mnr',50)->nullable();
            $table->timestamps();
        });
        Schema::create('tahun', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tahun', 4)->nullable();
        });

        Schema::create('menara', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ptm_id')->unsigned()->index();
            $table->integer('kec_id')->unsigned()->index();
            $table->integer('kel_id')->unsigned()->index();
            $table->integer('mnrstat_id')->unsigned()->index();
            $table->string('mnr_side_id', 50)->nullable();
            $table->string('mnr_side_nama', 50)->nullable();
            $table->string('mnr_side_almt', 150)->nullable();
            $table->string('mnr_lat', 30)->nullable();
            $table->string('mnr_lng', 30)->nullable();
            $table->string('mnr_l', 20)->nullable();
            $table->string('mnr_t', 5)->nullable();
            $table->string('mnr_jns_lkl', 20)->nullable();
            $table->string('mnr_jns', 20)->nullable();
            $table->string('mnr_struk', 20)->nullable();
            $table->string('mnr_akses', 20)->nullable();
            $table->string('mnr_thn', 4)->nullable();
            $table->timestamps();
            //cascade
            $table->foreign('ptm_id')->references('id')->on('pemilik_menara')->onDelete('cascade');
            $table->foreign('kec_id')->references('id')->on('kecamatan')->onDelete('cascade');
            $table->foreign('kel_id')->references('id')->on('kelurahan')->onDelete('cascade');
            $table->foreign('mnrstat_id')->references('id')->on('menara_status')->onDelete('cascade');
        });
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pg_layan', 30)->nullable();
            $table->string('pg_nama', 30)->nullable();
            $table->timestamps();
        });
        Schema::create('menara_pengguna', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menara_id')->unsigned()->index();
            $table->integer('pengguna_id')->unsigned()->index();
            $table->timestamp('pgmnr_use')->nullable();
            $table->timestamps();
            //cascade
            $table->foreign('menara_id')->references('id')->on('menara')->onDelete('cascade');
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menara_pengguna', function($table) {
            $table->dropForeign('menara_id');
            $table->foreign('menara_id')->references('id')->on('menara')->onDelete('cascade');
            $table->dropForeign('pengguna_id');
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
        });
        Schema::drop('menara',function($table) {
            $table->dropForeign('ptm_id');
            $table->foreign('ptm_id')->references('id')->on('pemilik_menara')->onDelete('cascade');
            $table->dropForeign('kec_id');
            $table->foreign('kec_id')->references('id')->on('kecamatan')->onDelete('cascade');
            $table->dropForeign('kel_id');
            $table->foreign('kel_id')->references('id')->on('kelurahan')->onDelete('cascade');
            $table->dropForeign('mnrstat_id');
            $table->foreign('mnrstat_id')->references('id')->on('menara_status')->onDelete('cascade');
        });
        Schema::dropIfExists('menara_pengguna');
        Schema::dropIfExists('tahun');
        Schema::dropIfExists('menara');
        Schema::dropIfExists('pengguna');
        Schema::dropIfExists('menara_status');
    }
}
