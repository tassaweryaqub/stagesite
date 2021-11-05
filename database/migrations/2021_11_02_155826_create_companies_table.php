<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->foreignId('internship_id')->constrained('internships')
            ->onUpdate('no action')->onDelete('no action'); 
            
=======
>>>>>>> 3de97244130c3762427669c9f0f8c75c86e6e3c3
            $table->string('name', 100); 
            $table->mediumText('details'); 
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
        Schema::dropIfExists('companies');
    }
}
