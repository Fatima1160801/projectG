<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('password');
            $table->bigInteger('ssn')->unique();
            $table->double('salray')->default('00');
            $table->string('license')->nullable();
            $table->enum('available', ['yes', 'no'])->default('yes');
            $table->enum('busy', ['yes', 'no'])->default('no');
            $table->string('banknumber');
           // $table->foreignId('admin_id')->constrained()->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
