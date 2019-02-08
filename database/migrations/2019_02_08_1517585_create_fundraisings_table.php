<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundraisingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('fundraisings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('founded_at');
            $table->string('description')->nullable();

            $table->timestamps();
            $table->string('slug');
            $table->softDeletes();
            $table->unique('slug');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fundraisings');
    }
}
