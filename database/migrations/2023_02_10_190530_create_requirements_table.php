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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->string('animal');
            $table->string('category');
            $table->string('me_max')->nullable();
            $table->string('me_min')->nullable();
            $table->string('de')->nullable();
            $table->string('cp_max')->nullable();
            $table->string('cp_min')->nullable();
            $table->string('dcp')->nullable();
            $table->string('lys')->nullable();
            $table->string('m')->nullable();//m+c
            $table->string('meth')->nullable();
            $table->string('fat')->nullable();
            $table->string('fibre')->nullable();
            $table->string('ca_max')->nullable();
            $table->string('ca_min')->nullable();
            $table->string('p_max')->nullable();
            $table->string('p_min')->nullable();
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
        Schema::dropIfExists('requirements');
    }
};
