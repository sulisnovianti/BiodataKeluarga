<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrangtuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtuas', function (Blueprint $table) {
            $table->increments('id');
             $table->string('Nama_ibu');
            $table->string('Nama_ayah');
            $table->integer('Umur_ibu');
            $table->integer('Umur_ayah');
            $table->text('Alamat');
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
        Schema::dropIfExists('orangtuas');
    }
}
