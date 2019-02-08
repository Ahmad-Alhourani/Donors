<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('donor_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('details')->nullable();

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
        Schema::dropIfExists('donor_types');
    }
}
