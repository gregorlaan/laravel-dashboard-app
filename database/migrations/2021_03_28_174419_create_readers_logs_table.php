<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadersLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reader_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reader_id');
            $table->string('value');
            $table->timestamps();
            $table->index('reader_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reader_logs');
    }
}
