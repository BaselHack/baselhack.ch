<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();

            $table->string('company')->nullable();

            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();

            $table->boolean('confirmed_email')->default(false);

            $table->boolean('over_eighteen')->default(false);
            $table->dateTime('accepted_policy')->default(\Carbon\Carbon::now());

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
