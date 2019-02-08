<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('l_name');
            $table->string('address');
            $table->unsignedInteger('city_id');
            $table->string('mobile');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->boolean('is_orphan')->nullable();
            $table->string('notes')->nullable();

            $table->timestamps();
            $table->string('slug');
            $table->softDeletes();
            $table->unique('slug');

            $table
                ->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
