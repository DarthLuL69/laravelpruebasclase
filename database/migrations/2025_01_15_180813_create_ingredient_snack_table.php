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
        Schema::create('ingredient_snack', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("ingredient_id")->constrained();
            $table->foreignId("snack_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("ingredient_snack", function (Blueprint $table){
            $table->dropConstrainedForeignId("snack_id");

            $table->dropConstrainedForeignId("ingredient_id");
        });
        Schema::dropIfExists('ingredient_snack');
    }
};
