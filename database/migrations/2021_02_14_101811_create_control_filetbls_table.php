<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlFiletblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_filetbls', function (Blueprint $table) {
            $table->id();
            $table->string('organization');
            $table->string('month');
            $table->string('year');
            $table->string('Emp_pension');
            $table->string('staff_pension');
            $table->string('development_levy')->nullable();
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
        Schema::dropIfExists('control_filetbls');
    }
}
