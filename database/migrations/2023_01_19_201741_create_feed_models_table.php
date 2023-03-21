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
        Schema::create('feed_models', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('me')->nullable();
            $table->string('de')->nullable();
            $table->string('cp')->nullable();
            $table->string('dcp')->nullable();
            $table->string('lys')->nullable();
            $table->string('m')->nullable();
            $table->string('meth')->nullable();
            $table->string('fat')->nullable();
            $table->string('fibre')->nullable();
            $table->string('ca')->nullable();
            $table->string('p')->nullable();
            $table->string('cost');
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
        Schema::dropIfExists('feed_models');
    }
};
