<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploitimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploitimes', function (Blueprint $table) {
            $table->Bigincrements('id');
           
            $table->integer('idniveau')->unsigned()->nullable();
            $table->foreign('idniveau')->references('id')->on('niveaux')->onUpdate('cascade')->onDelete('set null');
            $table->integer('iddating')->unsigned()->nullable();
            $table->foreign('iddating')->references('id')->on('datings')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idhoraire')->unsigned()->nullable();
            $table->foreign('idhoraire')->references('id')->on('horaires')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere')->unsigned()->nullable();
            $table->foreign('idmatiere')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idprofesseur')->unsigned()->nullable();
            $table->foreign('idprofesseur')->references('id')->on('professeurs')->onUpdate('cascade')->onDelete('set null');
            
 
            
            
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
        Schema::dropIfExists('emploitimes');
    }
}
