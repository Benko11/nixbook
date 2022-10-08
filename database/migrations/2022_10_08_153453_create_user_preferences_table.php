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
        Schema::create('user_preferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('font_id');
            $table->unsignedBigInteger('background_colour')->nullable();
            $table->unsignedBigInteger('background_id')->nullable();
            $table->unsignedBigInteger('background_blur')->nullable();
            $table->timestamps();

            $table->check('(background_colour IS NULL AND background_id IS NOT NULL AND background_blur IS NOT NULL) OR (background_colour IS NOT NULL AND background_id IS NULL AND background_blur IS NULL)', 'background_colours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_preferences');
    }
};
