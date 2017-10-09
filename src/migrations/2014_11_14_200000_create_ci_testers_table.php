<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PragmaRX\Support\Migration;

class CreateCiTestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function migrateUp()
    {
        Schema::create('ci_testers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('command');

            $table->string('output_folder')->nullable();

            $table->string('output_html_fail_extension')->nullable();

            $table->string('output_png_fail_extension')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function migrateDown()
    {
        Schema::drop('ci_testers');
    }
}
