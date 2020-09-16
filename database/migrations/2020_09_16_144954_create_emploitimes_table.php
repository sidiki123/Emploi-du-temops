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
            $table->integer('idmatiere1')->unsigned()->nullable();
            $table->foreign('idmatiere1')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere2')->unsigned()->nullable();
            $table->foreign('idmatiere2')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere3')->unsigned()->nullable();
            $table->foreign('idmatiere3')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere4')->unsigned()->nullable();
            $table->foreign('idmatiere4')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere5')->unsigned()->nullable();
            $table->foreign('idmatiere5')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere6')->unsigned()->nullable();
            $table->foreign('idmatiere6')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere7')->unsigned()->nullable();
            $table->foreign('idmatiere7')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere8')->unsigned()->nullable();
            $table->foreign('idmatiere8')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere9')->unsigned()->nullable();
            $table->foreign('idmatiere9')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere10')->unsigned()->nullable();
            $table->foreign('idmatiere10')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere11')->unsigned()->nullable();
            $table->foreign('idmatiere11')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere12')->unsigned()->nullable();
            $table->foreign('idmatiere12')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere13')->unsigned()->nullable();
            $table->foreign('idmatiere13')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere14')->unsigned()->nullable();
            $table->foreign('idmatiere14')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere15')->unsigned()->nullable();
            $table->foreign('idmatiere15')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere16')->unsigned()->nullable();
            $table->foreign('idmatiere16')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere17')->unsigned()->nullable();
            $table->foreign('idmatiere17')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere18')->unsigned()->nullable();
            $table->foreign('idmatiere18')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere19')->unsigned()->nullable();
            $table->foreign('idmatiere19')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere20')->unsigned()->nullable();
            $table->foreign('idmatiere20')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere21')->unsigned()->nullable();
            $table->foreign('idmatiere21')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere22')->unsigned()->nullable();
            $table->foreign('idmatiere22')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere23')->unsigned()->nullable();
            $table->foreign('idmatiere23')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere24')->unsigned()->nullable();
            $table->foreign('idmatiere24')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere25')->unsigned()->nullable();
            $table->foreign('idmatiere25')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere26')->unsigned()->nullable();
            $table->foreign('idmatiere26')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere27')->unsigned()->nullable();
            $table->foreign('idmatiere27')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere28')->unsigned()->nullable();
            $table->foreign('idmatiere28')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere29')->unsigned()->nullable();
            $table->foreign('idmatiere29')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere30')->unsigned()->nullable();
            $table->foreign('idmatiere30')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere31')->unsigned()->nullable();
            $table->foreign('idmatiere31')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere32')->unsigned()->nullable();
            $table->foreign('idmatiere32')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere33')->unsigned()->nullable();
            $table->foreign('idmatiere33')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere34')->unsigned()->nullable();
            $table->foreign('idmatiere34')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere35')->unsigned()->nullable();
            $table->foreign('idmatiere35')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere36')->unsigned()->nullable();
            $table->foreign('idmatiere36')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere37')->unsigned()->nullable();
            $table->foreign('idmatiere37')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere38')->unsigned()->nullable();
            $table->foreign('idmatiere38')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere39')->unsigned()->nullable();
            $table->foreign('idmatiere39')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere40')->unsigned()->nullable();
            $table->foreign('idmatiere40')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere41')->unsigned()->nullable();
            $table->foreign('idmatiere41')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere42')->unsigned()->nullable();
            $table->foreign('idmatiere42')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere43')->unsigned()->nullable();
            $table->foreign('idmatiere43')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere44')->unsigned()->nullable();
            $table->foreign('idmatiere44')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
            $table->integer('idmatiere45')->unsigned()->nullable();
            $table->foreign('idmatiere45')->references('id')->on('matieres')->onUpdate('cascade')->onDelete('set null');
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
