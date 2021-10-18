<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectEquipments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('project_equipments', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('projects_id')->unsigned();
        //     $table->integer('equipments_id')->unsigned();
        //     $table->string("status")->default('active');
        //     $table->timestamps();

        //     /*@ Connect comment table's post_id with post table's id field */
        //     $table->foreign('projects_id')->references('id')->on('projects');
        //     $table->foreign('equipments_id')->references('id')->on('equipment');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_equipments');
    }
}
