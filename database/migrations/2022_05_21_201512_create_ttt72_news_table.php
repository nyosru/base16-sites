<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTtt72NewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttt72_news', function (Blueprint $table) {
            $table->id();
            $table->enum('tema', ['learning', 'merop'])
                // ->default('text')
                ->nullable();
            $table->enum('type', ['youtube', 'text'])
                ->default('text');
            $table->string('name');
            $table->string('link')
                ->nullable();
            $table->date('date');
            $table->text('opis')
                ->nullable();
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
        Schema::dropIfExists('ttt72_news');
    }
}
