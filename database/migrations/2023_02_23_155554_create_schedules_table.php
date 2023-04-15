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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('firstWeekMonday')->nullable();
            $table->text('firstWeekTuesday')->nullable();
            $table->text('firstWeekWednesday')->nullable();
            $table->text('firstWeekThursday')->nullable();
            $table->text('firstWeekFriday')->nullable();
            $table->text('firstWeekSaturday')->nullable();
            $table->text('secondWeekMonday')->nullable();
            $table->text('secondWeekTuesday')->nullable();
            $table->text('secondWeekWednesday')->nullable();
            $table->text('secondWeekThursday')->nullable();
            $table->text('secondWeekFriday')->nullable();
            $table->text('secondWeekSaturday')->nullable();
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
        Schema::dropIfExists('schedules');
    }
};
