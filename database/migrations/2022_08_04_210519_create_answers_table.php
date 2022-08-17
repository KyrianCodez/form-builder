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
   
            Schema::create('answers', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->foreignId('form_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
                $table->string('sessions_id');
                $table->foreign('sessions_id')->references('id')->on('sessions')->onUpdate('cascade')->onDelete('cascade');
            });
       
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::dropIfExists('answers');
    }
};
