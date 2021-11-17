<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //
     //*! let op als je een RELATIE omschrijft met de desbetreffende tabel( ForeignID ) kijk dan of die TABEL BOVEN staat en in de DATABASESEEDER ook als eerst wordt geseed anders krijg je conflicten !
     //TODO Stel je hebt gegevens nodig van COMPANY vanuit de Student page dan zorg je ervoor dat je eerst Companies table hebt staan in je migrations en daarna in de DATABASESEEDER kijken of companies als eerst wordt geseed. 
    
     public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')
            ->onUpdate('cascade')->onDelete('cascade'); 

            $table->foreignId('technic_id')->constrained('technics')
            ->onUpdate('cascade')->onDelete('cascade'); 

            $table->foreignId('school_id')->constrained('schools')
            ->onUpdate('cascade')->onDelete('cascade'); 

            $table->foreignId('practicalteacher_id')->constrained('practicalteachers')
            ->onUpdate('cascade')->onDelete('cascade'); 

            $table->string('review', 30); 
            $table->tinyInteger('rating');
            $table->string('name', 30); 
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
        Schema::dropIfExists('students');
    }
}
