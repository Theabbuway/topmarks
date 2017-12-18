<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('assignmentfiles', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('assignment_id')->unsigned();
                $table->foreign('assignment_id')->references('id')->on('Assignments');
                $table->string('filename');
                $table->timestamps();
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
        Schema::dropIfExists('assignmentfiles');
    }
}
