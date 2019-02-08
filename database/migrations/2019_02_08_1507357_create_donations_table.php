<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('donor_id');
            $table->unsignedInteger('fundraising_id');
            $table->double('value');

            $table->timestamps();
            $table->softDeletes();

            $table
                ->foreign('donor_id')
                ->references('id')
                ->on('donors')
                ->onDelete('cascade');
            $table
                ->foreign('fundraising_id')
                ->references('id')
                ->on('fundraisings')
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
        Schema::dropIfExists('donations');
    }
}
