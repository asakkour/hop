<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('contacts', function(Blueprint $table) {
            $table->increments('contact_ids');
            $table->string('civilite'           , 1)->nullable();
            $table->string('nom'                , 50);
            $table->string('prenom'             , 50);
            $table->string('fonction'           , 50)->nullable();
            $table->string('service'            , 50)->nullable();
            $table->string('email'              , 40)->unique();
            $table->string('telephone_mobile'   , 50)->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('nom_societe'        , 50)->nullable();
            $table->text  ('adresse_societe')->nullable();
            $table->string('code_postal_societe', 30)->nullable();
            $table->string('ville_societe'      , 50)->nullable();
            $table->string('telephone_societe'  , 50)->nullable();
            $table->string('site_web_societe'   , 50)->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
