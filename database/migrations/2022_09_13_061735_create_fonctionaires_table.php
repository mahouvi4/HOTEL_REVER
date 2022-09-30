<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonctionairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctionaires', function (Blueprint $table) {
            $table->id();
            $table->string('firstname_f');
            $table->string('name_f');
            $table->string('email_f')->unique();
            $table->integer('cpf_f')->unique();
            $table->integer('salaire_f')->nullable();
            $table->integer('prime_f')->nullable();
            $table->string('type_payment_f');
            $table->string('statut');
            $table->integer('id_departement');
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
        Schema::dropIfExists('fonctionaires');
    }
}
