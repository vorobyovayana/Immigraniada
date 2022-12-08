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
        Schema::table('spouses', function (Blueprint $table) {
            $table->date('dob');
            $table->string('countryOfBirth');
            $table->string('residentialAddress');
            $table->string('occupation');
            $table->boolean('willAccompany')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spouses', function (Blueprint $table) {
            //
        });
    }
};
