<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrphanSponsorshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('orphan_sponsorships', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('donor_id');
            $table->unsignedInteger('orphan_id');
            $table->double('value');
            $table->date('start_date')->nullable();
            $table->date('expected_date')->nullable();
            $table->date('end_date')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table
                ->foreign('donor_id')
                ->references('id')
                ->on('donors')
                ->onDelete('cascade');
            $table
                ->foreign('orphan_id')
                ->references('id')
                ->on('orphans')
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
        Schema::dropIfExists('orphan_sponsorships');
    }
}
