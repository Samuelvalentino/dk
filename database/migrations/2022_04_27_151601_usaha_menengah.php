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
        Schema::create('Usaha_menengah', function (Blueprint $table) {
            $table->id();
            $table->string('file 1');
            $table->string('file 2');
            $table->string('file 3');
            $table->string('file 4');
            $table->string('file 5');
            $table->string('file 6');
            $table->string('file 7');
            $table->string('file 8');
            $table->string('file 9');
            $table->string('file 10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usaha_menengah');
    }
};
