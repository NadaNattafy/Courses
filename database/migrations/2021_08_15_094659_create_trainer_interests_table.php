<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_interests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Trainer::class)->constrained()
            ->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreignIdFor(\App\Models\Interest::class)->constrained()
            ->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('trainer_interests');
    }
}
