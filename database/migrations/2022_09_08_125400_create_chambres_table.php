<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('ref_ch');
            $table->string('nom_ch');
            $table->text('desc_ch');
            $table->integer('prix_ch');
            $table->integer('desconte_ch');
            $table->string('statut');
            $table->string('popularite');
            $table->string('photo');
            $table->string('cod_chambre');
            $table->integer('id_categorie');
            $table->softDeletes();
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
        Schema::dropIfExists('chambres');
    }
}
